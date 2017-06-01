<?php
include_once("MySQLFunctions.php");
class MensajesDao{
  private $dao;

  function __construct(){
    $this->dao = new MySQLFunctions();
  }
  // obtenemos los mensajes de entrada
  public function getMensajesEntrada($userid,$limit=10){
    if($limit <= 10){
      $this->dao->select("select * from vMensajes","men_receptorid='$userid'","limit 0,10");
    }else{
      $initLimit = ($limit/10)*10;
      $sql->select("select * from vMensajes","men_receptorid='$userid'","limit $initLimit,$limit");
    }
    $resp = $this->dao->getResponse();
    if($resp["status"] && count($resp["data"]) > 0){
      return $resp["data"];
    }
    return null;
  }
  // obtenemos los mensajes de salida
  public function getMensajesSalida($userid,$limit=10){
    if($limit <= 10){
      $this->dao->select("select * from vMensajes","men_emisorid='$userid'","limit 0,10");
    }else{
      $initLimit = ($limit/10)*10;
      $this->dao->select("select * from vMensajes","men_emisorid='$userid'","limit $initLimit,$limit");
    }
    $resp = $this->dao->getResponse();
    if($resp["status"] && count($resp["data"]) > 0){
      return $resp["data"];
    }
    return null;
  }

  // obtenemos mensjae con el id
  public function getMensajeId($mensajeid){
    $this->dao->select("select * from vMensajes","men_mensajeid='$mensajeid'");
    $resp = $this->dao->getResponse();
    if($resp["status"] && count($resp["data"]) > 0){
      return $resp["data"][0];
    }
    return null;
  }

  public function marcarLeido($mensajeid){
      if($mensajeid){
        $resp = $this->dao->update("update Mensajes set men_abierto=1","men_mensajeid=$mensajeid");
        if($resp["status"]){
          return true;
        }
        return false;
      }
      return false;
  }



  // para enviar mensajes
  public function insertMensaje($emisorid,$receptorid,$subject,$body){
    if($emisorid && $receptorid){
      try{
        $this->dao->select("select * from usuarios","usr_usuario='$receptorid'");
        $resp = $this->dao->getResponse();
        if($resp["status"] && count($resp["data"]) > 0){
          $usrid = $resp["data"][0]["usr_id"];
          $dataReceptor = [
            "men_emisorid" => $emisorid,
            "men_receptorid" => $usrid,
            "men_subject" => $subject,
            "men_body" => $body,
            "men_tipo" => "entrada"
          ];
          $dataEmisor = [
            "men_emisorid" => $emisorid,
            "men_receptorid" => $usrid,
            "men_subject" => $subject,
            "men_body" => $body,
            "men_tipo" => "salida"
          ];
          $this->dao->insert("Mensajes",$dataReceptor);
          return true;
        }else{
          return false;
        }
      }catch(Exception $e){
        return false;
      }
    }
    return false;
  }


}

?>
