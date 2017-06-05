<?php
include_once('Comments.php');

$comm_id = $_GET['comm_id'];

$dao = new Comments();

$result = $dao->deleteComment($comm_id);
$result2 = $dao->deleteRespuestasByComment($comm_id);

if (!$result || !$result2)
	echo "Error. El comentario no se ha borrado correctamente";

$url = $_SERVER['HTTP_REFERER'];
 header("Location: $url");


?>