<?php
class login{
    function __construct($username,$pasword) {
       if($username && $password){
         $login = new loginDAO($username,$password);
         if($login){
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
