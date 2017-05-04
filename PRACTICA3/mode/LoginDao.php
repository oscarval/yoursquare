<?php
include("MySQLFunctions.php");

class LoginDao{
  private $user;
  private $pass;
  function __construct($username,$password){
    $this->user = $username;
    $this->pass = $password;
  }
  public function doLogin(){
    $sql = new MySQLFunctions();
    $sql->select("select * from usuarios","usr_usuario='$this->user' and usr_password='$this->pass'");
    $resp = $sql->getResponse();
    if($resp["status"] && count($resp["data"]) > 0){
      return $resp["data"];
    }else{
      return false;
    }
  }
}

?>
