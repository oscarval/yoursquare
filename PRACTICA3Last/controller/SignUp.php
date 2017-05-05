<?php
include("../mode/SignUpDao.php");
class SignUp{
    private $signUpStatus;
    function __construct($username,$password) {
       if($username && $password){
         $signUp = new SignUpDao($username,$password); 
         $this->signUpStatus = $signUp->doSignUp();
       }
    }

    public function isSignUp(){
        return $this->signUpStatus;
    }

}

?>
