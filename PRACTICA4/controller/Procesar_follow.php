<?php
session_start();
include_once("Follow.php");


$follow = new Follow();

if($followed = $follow->isFollowed($_SESSION["id"], $_GET["id"])){
    $insertFollower = $follow->insertFollow($_SESSION["id"], $_GET["id"]);
}

$url = $_SERVER['HTTP_REFERER'];
header("Location: $url");
?>
