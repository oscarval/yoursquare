<?php
include_once("../controller/Squares.php");
include_once("../controller/Mensajes.php");
include_once("../controller/Usuarios.php");

$sq_squareid = $_GET['sq_squareid'];
$dao = new Squares();
$userDao = new Usuarios();
$mensaje = new Mensajes();

$dao->deleteSquare($sq_squareid);

/*$square = $dao->getSquareDetail($sq_squareid); 
$user = $userDao->getUser($square['sq_userid']);


if (!$dao)
	echo "<p>Se ha producido un error al borrar el usuario</p>";
else{
	$id_receptor = $user['usr_usuario'];
	
	$subject = "Tu square (" . $square['sq_title'] . ") ha sido borrado";
	$body = "Hola " . $id_receptor . ", tu square (".$square['sq_title'] . ") por infrigir nuestras políticas de publiación";
	echo $id_receptor . " , " . $subject . ", " . $body;

	$mensaje->sendEmail('1',$id_receptor,$subject,$body);
	var_dump($mensaje);
	if($mensaje){
		echo "<script type='text/javascript'>alert('El email se ha enviado correctamente');</script>";
	}
	else
		echo "<script type='text/javascript'>alert('El email no se ha enviado correctamente');</script>";

}
*/
$url = $_SERVER['HTTP_REFERER'];
 header("Location: $url");
