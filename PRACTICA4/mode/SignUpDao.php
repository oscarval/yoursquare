<?php
include("MySQLFunctions.php");

class SignUpDao{
  private $user;
  private $pass;
  function __construct($username,$password){
    $this->user = $username;
    $this->pass = $password;
  }
  public function doSignUp(){
    $sqlInsert = new MySQLFunctions();
    $sqlSelect = new MySQLFunctions();

    $sqlSelect->select("select * from usuarios","usr_usuario='$this->user' and usr_password='$this->pass'");
    $resultLog = $sqlSelect->getResponse();
    $data = [
            "usr_usuario" => $this->user,
            "usr_password" => $this->pass,
            "usr_es_admin" => "0",
            ];


     if(count($resultLog["data"]) == 0){
      $sqlInsert->insert("usuarios",$data);
      $respInsert = $sqlInsert->getResponse();
      return true;
    }
    else
      return false;
  }
}

?>
