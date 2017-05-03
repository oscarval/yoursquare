<?php

class login{

  public $username;
  public $pasword;
    function __construct($username,$pasword) {
      $this -> username = $username;
      $this -> password = $pasword;
    }

    public function comprueba_login(){
      include("connect.php");
      $sql = "SELECT id, usuario, password FROM usuarios";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc()) {
        if ( ($this -> username == $row["usuario"]) && ($this -> password == $row["password"]) ){
          session_start(); 
          $_SESSION['id']=$row["id"];
          $_SESSION['username']=$this -> username;
          $_SESSION['password']=$this -> password;
          $_SESSION['autentificado'] = true;
          if ($row["es_admin"] == true)
            $_SESSION['es_admin'] = true;
          else
            $_SESSION['es_admin'] = false;
          return true;
        }
      }
      $_SESSION['autentificado'] = false;
      $_SESSION['es_admin'] = false;
      return false;
    }
}

?>
