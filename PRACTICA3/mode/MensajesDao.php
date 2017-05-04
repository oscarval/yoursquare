<?php
include("MySQLFunctions.php");
class MensajesDao{

  // obtenemos los mensajes del tipo que necesiten
  // @tipo: entrada, salida
  public function getMensajes($userid,$tipo,$limit=10){
    $sql = new MySQLFunctions();
    if($limit <= 10){
      $sql->select("select * from Mensajes","men_recectorid='$userid' and men_tipo='$tipo'","limit 0,10");
    }else{
      $initLimit = ($limit/10)*10;
      $sql->select("select * from Mensajes","men_receptorid='".$userid."' and men_tipo='".$tipo."'","limit $initLimit,$limit");
    }
    if($sql->response["status"] && count($sql->response["data"]) > 0){
      return $sql->response["data"];
    }
    return null;
  }

  // para enviar mensajes
  public function insertMensaje($remitenteid,$receptorid,$subject,$body){
    if($remitenteid && $receptorid){
      try{
        $sql = new MySQLConnect();
        $dataReceptor = [
          "men_emisorid" => $remitenteid,
          "men_receptorid" => $receptorid,
          "men_subject" => $subject,
          "men_body" => $body,
          "men_tipo" => "entrada"
        ];
        $dataRemitente = [
          "men_emisorid" => $remitenteid,
          "men_receptorid" => $receptorid,
          "men_subject" => $subject,
          "men_body" => $body,
          "men_tipo" => "salida"
        ];
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
