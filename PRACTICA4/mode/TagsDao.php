<?php
include("MySQLFunctions.php");
class TagsDao{
  private $dao;

  function __construct(){
    $this->dao = new MySQLFunctions();
  }
  /* obtenemos los tags según el id del square
  ** @squareId int, squareid
  */
  public function getTagsBySquareId($squareId){
    $sql->select("select * from vTagsSquare","where sq_quareid=$squareId");
    $resp = $this->dao->getResponse();
    if($resp["status"] && count($resp["data"]) > 0){
      return $resp["data"];
    }
    return null;
  }
  /* Obtenemos las tags que existan con el texto que se pase
  ** @search string texto a buscar
  */
  public function getTagsByName($search){
      $this->dao->select("select * from Tags","where tag_name like '".$search."'");
      $resp = $this->dao->getResponse();
      if($resp["status"] && count($resp["data"]) > 0){
        return $resp["data"];
      }
      return null;
  }

  /* Insertamos los tags que pasen
  ** @tags string, tag a insertar
  ** @squareid el id del square asociado a las tags
  */
  public function createTags($tag,$squareid){
      $ar = [
        "tag_name" = $tag
      ]
      $this->dao->insert("Tags",$ar);
      $resp = $this->dao->getResponse();
      // si todo ok insertamos en la relaetetags
      if($resp["status"]){
          $ar = [
            "retag_tagid" = $resp["idinsert"],
            "retag_squareid" = $squareid
          ]
          $this->dao->insert("RelatedTags",$ar);
          $resp = $this->dao->getResponse();
          if($resp["status"]){
            return true;
          }
      }
      return null;
  }

}

?>
