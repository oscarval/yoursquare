<?php
include_once('Comments.php');

$commth_id = $_GET['commth_id'];

$dao = new Comments();

$result = $dao->deleteRespuesta($commth_id);

if (!$result)
	echo "Error. El comentario no se ha borrado correctamente";

$url = $_SERVER['HTTP_REFERER'];
 header("Location: $url");


?>