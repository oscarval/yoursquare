<?php
include("../mode/LoginDao.php");
class Login{
    private $loginStatus;
    function __construct($username,$password) {
       if($username && $password){
        //  $login = new LoginDao($username,$password);
        //  if($userdata = $login->doLogin()){
         if(1 == 1){
           $_SESSION["login"] = true;
           $_SESSION["username"] = $username;
           //$_SESSION["isAdmin"] = $userdata["isAdmin"];
           $this->loginStatus = true;
         }else{
           $this->loginStatus = false;
         }
       }else{
         $this->loginStatus = false;
       }
    }

    public function isLogin(){
        return $this->loginStatus;
    }

}

?>
