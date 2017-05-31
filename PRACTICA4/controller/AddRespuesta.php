<?php

include_once('../controller/Comments.php');
$commentsDao = new Comments();



$commth_usr_id = $_GET['commth_usr_id'];
$commth_commId = $_GET['commth_commId'];
$contenido = $_REQUEST["Respuesta"];


if (isset($_POST['submit'])){
	if (isset($_REQUEST["Respuesta"]) ){
		
		$resultInsert = $commentsDao->insertCommentOfComment($commth_usr_id, $commth_commId, $contenido);
	}
}
$url = $_SERVER['HTTP_REFERER'];
  header("Location: $url");