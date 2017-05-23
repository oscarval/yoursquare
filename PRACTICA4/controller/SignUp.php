<?php
include("../mode/SignUpDao.php");
class SignUp{
    private $signUpStatus;
    function __construct($username,$password, $pais, $email) {
       if($username && $password){
         $signUp = new SignUpDao($username,$password,$pais,$email); 
         $this->signUpStatus = $signUp->doSignUp();
       }
    }

    public function isSignUp(){
        return $this->signUpStatus;
    }

}

?>
