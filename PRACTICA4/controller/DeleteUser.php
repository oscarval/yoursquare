<?php

include_once("../controller/Usuarios.php");

$idUser = $_GET['usr_id'];
$dao = new UsuariosDao();

$dao->deleteUser($idUser);

if (!$dao)
	echo "<p>Se ha producido un eror al borrar el usuario</p>";
$url = $_SERVER['HTTP_REFERER'];
header("Location: ../views/admin.php");

?>
