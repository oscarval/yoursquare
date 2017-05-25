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
}

?>
