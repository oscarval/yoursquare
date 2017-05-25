<?php
include_once("MySQLFunctions.php");
class UsuariosDao{
  private $dao;

  function __construct(){
    $this->dao = new MySQLFunctions();
  }
  /* obtenemos los tags según el id del square
  ** @squareId int, squareid
  */
  public function getFollowing($user_id){
    $this->dao->select("select usr_id_following from following",false,"where usr_id=$user_id");
    $resp = $this->dao->getResponse();
    if($resp["status"] && count($resp["data"]) > 0){
      return $resp["data"];
    }
    return null;
  }



}

?>
