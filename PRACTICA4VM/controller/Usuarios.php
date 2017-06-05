<?php
include_once("../mode/UsuariosDao.php");
class Usuarios{
    private $dao;

    function __construct(){
      $this->dao = new UsuariosDao();
    }
    // obtener los squares de invitado
    public function getFollowing($user_id){
       return $this->dao->getFollowing($user_id);
    }

    public function deleteUser($idUser){
    	return $this->dao->deleteUser($idUser);
    }

    public function getUser($id_usr){
        return $this->dao->getUser($id_usr);
    }

    public function getUserLikesDislikes($id_user){
        return $this->dao->getUserLikesDislikes($id_user);
    }
}

?>
