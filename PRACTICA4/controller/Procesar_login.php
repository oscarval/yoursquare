<?php
session_start();
include("Login.php");
$login = new Login($_REQUEST["uname"],$_REQUEST["psw"]);
// if($login->isLogin()){
  //$url = $_SERVER['HTTP_REFERER'];
  header("Location: ../views/index.php");
// }
?>
