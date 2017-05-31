<?php
include_once("MySQLFunctions.php");



class FollowDao{
	private $dao;

	function __construct(){
	$this->dao = new MySQLFunctions();
	}

	/*
		*Introduce en la tabla following un nuevo seguimiento.
		*&idSquare -> id del Square del comentario; $idCreatro -> id de Usuario del creador de comentario
		*$idUserSquare -> id de usuario del creador de square; $content -> cotenido del square 
	*/
	public function insertFollow($idUser, $idUserFollowing){

    $data = [
            "usr_id" => $idUser,
            "usr_id_following" => $idUserFollowing,
            ];
    $this->dao->insert("following",$data);
    $result =  $this->dao->getResponse();

    if(isset($result['status']) && $result['status']){
        return true;
      }
      else
        return false;

  	}

     public function deleteFollow($idUser, $idUserFollowing){

      $this->dao->delete("delete from following","usr_id=$idUser and usr_id_following=$idUserFollowing");
      return $this->dao->getResponse();

     }
}

?>
