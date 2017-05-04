<?php
include("MySQLFunctions.php");
class MensajesDao{

  // obtenemos los mensajes del tipo que necesiten
  // @tipo: entrada, salida
  public function getMensajesEntrada($userid,$limit=10){
    $sql = new MySQLFunctions();
    if($limit <= 10){
      $sql->select("select * from vMensajes","men_receptorid='$userid'","limit 0,10");
    }else{
      $initLimit = ($limit/10)*10;
      $sql->select("select * from vMensajes","men_receptorid='$userid'","limit $initLimit,$limit");
    }
    $resp = $sql->getResponse();
    if($resp["status"] && count($resp["data"]) > 0){
      return $resp["data"];
    }
    return null;
  }
  // obtenemos los mensajes del tipo que necesiten
  // @tipo: entrada, salida
  public function getMensajesSalida($userid,$limit=10){
    $sql = new MySQLFunctions();
    if($limit <= 10){
      $sql->select("select * from vMensajes","men_emisorid='$userid'","limit 0,10");
    }else{
      $initLimit = ($limit/10)*10;
      $sql->select("select * from vMensajes","men_emisorid='$userid'","limit $initLimit,$limit");
    }
    $resp = $sql->getResponse();
    if($resp["status"] && count($resp["data"]) > 0){
      return $resp["data"];
    }
    return null;
  }

  // para enviar mensajes
  public function insertMensaje($emisorid,$receptorid,$subject,$body){
    if($emisorid && $receptorid){
      try{
        $sql = new MySQLFunctions();
        $sql->select("select * from usuarios","usr_usuario='$receptorid'");
        $resp = $sql->getResponse();
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
          $sql->insert("Mensajes",$dataReceptor);
          //$sql->insert("Mensajes",$dataEmisor);
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
