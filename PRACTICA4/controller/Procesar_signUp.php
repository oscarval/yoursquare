<?php
session_start();
include("SignUp.php");
//var_dump($_REQUEST["sex"]);
$signUp = new SignUp($_REQUEST["uname"],$_REQUEST["psw"],$_REQUEST["pais"],$_REQUEST["email"], $_REQUEST["sex"]);
if ($signUp->isSignUp()){
  	header("Location: ../views/index.php");
}
else
	header("Location: ../views/error_signUp.php");
?>
