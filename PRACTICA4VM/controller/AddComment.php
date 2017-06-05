<?php

include('../controller/Comments.php');
$commentsDao = new Comments();
echo "hola";

$sq_squareid = $_GET['sq_squareid'];
$usr_id = $_GET['usr_id'];
$sq_userid = $_GET['sq_userid'];
$contenido = $_REQUEST["Consulta"];

echo $sq_squareid . " \ " . $usr_id . " \ ". $sq_userid . " \ ".  $contenido . " \ ";

if (isset($_POST['submit'])){
	if (isset($_REQUEST["Consulta"]) ){
		
		$resultInsert = $commentsDao->insertComment($sq_squareid, $usr_id, $sq_userid, $contenido );
	}
}
$url = $_SERVER['HTTP_REFERER'];
  header("Location: $url");