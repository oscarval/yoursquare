<?php
include("../mode/MensajesDao.php");
class Mensajes{
    private $dao;

    function __construct(){
      $this->dao = new MensajesDao();
    }
  // obtener mensajes de bandeja de entrada
    public function getBandejaEntrada($receptorid){
       return $this->dao->getMensajes($receptorid,"entrada");
    }
    // obtener los mensajes de bandeja de salida
    public function getBandejaSalida($emisorid){
       return $this->dao->getMensajes($emisorid,"salida");
    }

    // para enviar mensajes
    public function sendEmail($emisorid,$receptorid,$subject,$body){
      return $this->dao->insertMensaje($emisorid,$receptorid,$subject,$body);
    }
}

?>
