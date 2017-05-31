<?php
include_once("MySQLFunctions.php");
class TagsDao{
  private $dao;

  function __construct(){
    $this->dao = new MySQLFunctions();
  }
  /* obtenemos los tags según el id del square
  ** @squareId int, squareid
  */
  public function getTagsBySquareId($squareId){
    $this->dao->select("select * from vTagsSquare","sq_squareid=$squareId");
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
      $this->dao->select("select * from Tags","tag_name like '".$search."'");
      $resp = $this->dao->getResponse();
      if($resp["status"] && count($resp["data"]) > 0){
        return $resp["data"];
      }
      return null;
  }

  /* Obtenemos las tags que existan con el texto que se pase
  ** @search string texto a buscar
  */
  private function getTagsByNameExactly($search){
      $this->dao->select("select * from Tags","tag_name='".$search."'");
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
        "tag_name" => $tag
      ];
      $existtag = $this->getTagsByNameExactly($tag);
      if(!$existtag){
        $this->dao->insert("Tags",$ar);
        $resp = $this->dao->getResponse();
        // si todo ok insertamos en la relaetetags
        if($resp["status"]){
            $ar = [
              "retag_tagid" => $resp["idinsert"],
              "retag_squareid" => $squareid
            ];
            $this->dao->insert("RelatedTags",$ar);
            $resp = $this->dao->getResponse();
            if($resp["status"]){
              return true;
            }
        }
      }else{
        $ar = [
          "retag_tagid" => $existtag[0]["tag_tagid"],
          "retag_squareid" => $squareid
        ];
        $this->dao->insert("RelatedTags",$ar);
        $resp = $this->dao->getResponse();
        if($resp["status"]){
          return true;
        }
      }
      return null;
  }

  /* Obtenemos los tags para el cloud
  */
  public function getTagsCloud($limit){
    $this->dao->select("select * from vTagsCloud",false,"limit 0,$limit");
    $resp = $this->dao->getResponse();
    if($resp["status"] && count($resp["data"]) > 0){
      return $resp["data"];
    }
    return null;
  }

}

?>
