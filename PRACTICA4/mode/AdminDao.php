<?php
include("MySQLFunctions.php");

class AdminDao{
  function __construct(){
  }
  public function getListUsers(){
    $functions = new MySQLFunctions();
    $sql=$functions->select("select usr_id, usr_usuario from usuarios","","");
    $resp = $functions->getResponse();
    if($resp["status"] && count($resp["data"]) > 0){
      return $resp["data"];
    }else{
      return false;
    }
  }

  public function deleteUser($id){
    $functions = new MySQLFunctions();
    $functions->delete("delete from usuarios","id =" . $id);
    return $functions->getResponse();
  }

  public function deletedSquare($idSquare){

    $functions = new MySQLFunctions();
    $functions->delete("delete from square","id =" . $id);
    return $functions->getResponse();
  }


}

?>
