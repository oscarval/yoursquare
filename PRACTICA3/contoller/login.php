<?php
class login{
    function __construct($username,$pasword) {
       if($username && $password){
         $login = new LoginDao($username,$password);
         if($login->doLogin()){
           $_SESSION["login"] = true;
           $_SESSION["username"] = $username;
           $_SESSION["isAdmin"] = $login->isAdmin();
           retunr true;
         }else{
           return false;
         }
       }else{
         return false;
       }
    }
}

?>
