<?php
include("MySQLFunctions.php");
class MensajesDao(){

  // obtenemos los mensajes del tipo que necesiten
  // @tipo: entrada, salida
  public function getMensajes($userid,$tipo,$limit=10){
    $sql = new MySQLConnect();
    if($limit <= 10){
      $sql->select("select * from Mensajes","men_recectorid='$userid' and men_tipo='$tipo'","limit 0,10");
    }else{
      $sql->select("select * from Mensajes","men_receptorid='$userid' and men_tipo='$tipo'","limit ".($limit/10)*10.",$limit");
    }
    if($sql->response["status"] && count($sql->response["data"]) > 0){
      return $sql->response["data"]
    }
    return null;
  }

  // para enviar mensajes
  public function insertMensaje($remitenteid,$receptorid,$subject,$body){
    if($remitenteid && $receptorid){
      try{
        $sql = new MySQLConnect();
        $dataReceptor = [
          "men_remitenteid" => $remitenteid,
          "men_receptorid" => $receptorid,
          "men_subject" => $subject,
          "men_body" => $body,
          "men_tipo" => "entrada",
          "men_createdate" => date("d/m/Y")
        ]
        $dataRemitente = [
          "men_remitenteid" => $remitenteid,
          "men_receptorid" => $receptorid,
          "men_subject" => $subject,
          "men_body" => $body,
          "men_tipo" => "salida",
          "men_createdate" => date("d/m/Y")
        ]
        $sql->insert("Mensajes",$dataReceptor);
        $sql->insert("Mensajes",$dataRemitente);
        return true;
      }catch(Exception $e){
        return false;
      }
    }
    return false;
  }


}

?>
