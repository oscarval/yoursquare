<?php
include("../mode/SignUpDao.php");
class SignUp{
    private $signUpStatus;
    private $pass;
    function __construct($username,$password, $pais, $email, $sex) {
       if($username && $password){
            $this->pass = password_hash($password . "square", PASSWORD_DEFAULT);
            $signUp = new SignUpDao($username,$this->pass,$pais,$email, $sex); 
            $this->signUpStatus = $signUp->doSignUp();
       }
    }

    public function isSignUp(){
        return $this->signUpStatus;
    }
}

?>
