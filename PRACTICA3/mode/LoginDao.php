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
    $sql->select("select * from usuarios","usuario='$this->user' and password='$this->pass'");
    if($sql->response["status"] && count($sql->response["data"]) > 0){
      return $sql->response["data"];
    }else{
      return false;
    }
  }
}

?>
