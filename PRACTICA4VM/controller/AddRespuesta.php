<?php

include_once('Comments.php');
$commentsDao = new Comments();



$commth_usr_id = $_REQUEST['commth_usr_id'];
$commth_commId = $_REQUEST['commth_commId'];
$contenido = $_REQUEST["Respuesta"];


if (isset($_POST['submit'])){
	if (isset($_REQUEST["Respuesta"]) ){
		
		$resultInsert = $commentsDao->insertCommentOfComment($commth_usr_id, $commth_commId, $contenido);
	}
}
$url = $_SERVER['HTTP_REFERER'];
  header("Location: $url");