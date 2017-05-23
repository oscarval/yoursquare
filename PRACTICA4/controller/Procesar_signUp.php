<?php
session_start();
include("SignUp.php");
$signUp = new SignUp($_REQUEST["uname"],$_REQUEST["psw"],$_REQUEST["pais"],$_REQUEST["email"]);
// if($login->isLogin()){
  //$url = $_SERVER['HTTP_REFERER'];
  //header("Location: $url");
// }
if ($signUp->isSignUp()){
  	header("Location: ../views/index.php");
}
else
	header("Location: ../views/error_signUp.php");
?>
