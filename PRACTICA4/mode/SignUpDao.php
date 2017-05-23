<?php
include("MySQLFunctions.php");

class SignUpDao{
  private $user;
  private $pass;
  private $email;
  private $pais;
  function __construct($username,$password, $pais, $email){
    $this->user = $username;
    $this->pass = $password;
    $this->pais = $pais;
    $this->email = $email;

  }
  public function doSignUp(){
    $sqlInsert = new MySQLFunctions();
    $sqlSelect = new MySQLFunctions();

    $sqlSelect->select("select * from usuarios","usr_email='$this->email'");
    $resultLog = $sqlSelect->getResponse();
    $data = [
            "usr_usuario" => $this->user,
            "usr_password" => $this->pass,
            "usr_es_admin" => "0",
            "usr_email" => $this->email,
            "usr_pais" => $this->pais,
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
