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
    $sql->select("select * from usuarios","usr_usuario='$this->user'");
    $resp = $sql->getResponse();
    if($resp["status"] && count($resp["data"]) > 0){

      echo "<script> alert('hola); </script>";
      var_dump($resp["data"]);
      if (password_verify($this->pass . "square", $resp["data"][0]['usr_password'])){
        return $resp["data"][0];
      }
      else
        return false;
    }else{
      return false;
    }
  }
}

?>
s