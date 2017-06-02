<?php
session_start();
include_once("Follow.php");


$follow = new Follow();
$idUser = null;
if(isset($_GET["idF"])){
    $idUser=$_GET["idF"];
}else if(isset($_GET["idU"])){
    $idUser=$_GET["idU"];
}

$followed = $follow->isFollowed($_SESSION["id"], $idUser);


if(!$followed && isset($_GET["idF"])){
    $insertFollower = $follow->insertFollow($_SESSION["id"], $idUser);
}else if($followed && isset($_GET["idU"])){
    $deleteFollower = $follow->deleteFollow($_SESSION["id"], $idUser);
}

$url = "../views/user.php?usr_id=".$idUser;
header("Location: $url");
?>
