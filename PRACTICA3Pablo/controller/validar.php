<?php


include("login.php");

$username=$_POST['username'];
$pass=$_POST['pasword'];

$object = new Login($username,$pass);

$result = $object->comprueba_login();

if($result == true){
	header("Location:../index_logged.php");
}
else{
	header("Location:../index.php");
}




?>