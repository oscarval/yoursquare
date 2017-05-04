<?php
include("../mode/MensajesDao.php");
class Mensajes{
  // obtener mensajes de bandeja de entrada
    public function getBandejaEntrada($receptorid){
       $men = new MensajesDao();
       return $men->getMensajes($receptorid,"entrada");
    }
    // obtener los mensajes de bandeja de salida
    public function getBandejaSalida($emisorid){
       $men = new MensajesDao();
       return $men->getMensajes($emisorid,"salida");
    }
}

?>
