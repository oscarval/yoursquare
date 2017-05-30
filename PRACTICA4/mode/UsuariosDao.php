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

  public function deleteUser($id_user){
      $this->dao->delete("delete from usuarios","usr_id=$id_user");
      return $this->dao->getResponse();
  }

  /* Obtenemos datos del usuario a partir del id de usuario
  */
  /* Obtenemos datos del usuario a partir del id de usuario
  */
  public function getUser($id_user){ //Si mas datos como correo, intereses, avatar, añadirlo a esta función
      $this->dao->select("select *from usuarios",false,"where usr_id=$id_user");
      $resp = $this->dao->getResponse();
      if($resp["status"] && count($resp["data"]) > 0){
        return $resp["data"][0];
      }
      return null;
  }

    public function getUserLikesDislikes($id_user){
        $this->dao->select("select sum(sq_likes) from square" ,"sq_userid=$id_user");
        $likes = $this->dao->getResponse();

        $this->dao->select("select sum(sq_dislikes) from square" ,"sq_userid=$id_user");
        $dislikes = $this->dao->getResponse();

        return $likes - $dislikes;
    }

}

?>
