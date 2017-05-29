<?php
include("MySQLFunctions.php");

class SignUpDao{
  private $user;
  private $pass;
  private $email;
  private $pais;
  private $sex;

  function __construct($username,$password, $pais, $email, $sex){
    $this->user = $username;
    $this->pass = $password;
    $this->pais = $pais;
    $this->email = $email;
    $this->sex = $sex;

  }
  public function doSignUp(){
    $sqlInsert = new MySQLFunctions();
    $sqlSelect = new MySQLFunctions();

    $sqlSelect->select("select * from usuarios","usr_email='$this->email' or usr_usuario='$this->username'");
    $resultLog = $sqlSelect->getResponse();

    if ($this->sex == "Femenino"){
      $data = [
              "usr_usuario" => $this->user,
              "usr_password" => $this->pass,
              "usr_es_admin" => "0",
              "usr_email" => $this->email,
              "usr_pais" => $this->pais,
              "usr_avatar" => "../img/avatar/avatar_woman.png",
              ];
    }
    else if ($this->sex == "Masculino"){
      $data = [
              "usr_usuario" => $this->user,
              "usr_password" => $this->pass,
              "usr_es_admin" => "0",
              "usr_email" => $this->email,
              "usr_pais" => $this->pais,
              "usr_avatar" => "../img/avatar/avatar_man.png",
              ];
    }
    else{
       $data = [
              "usr_usuario" => $this->user,
              "usr_password" => $this->pass,
              "usr_es_admin" => "0",
              "usr_email" => $this->email,
              "usr_pais" => $this->pais,
              "usr_avatar" => "../img/avatar/avatar_none.png",
              ];
    }


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
