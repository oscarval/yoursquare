<?php
include_once("../controller/Squares.php");
$id = $_REQUEST["id"];
$mode = $_REQUEST["mode"];
$square = new Squares();
/* Hace falta hace un update square y devolver el valor nuevo de likes o dislikes depedniendo del modo en el que este*/
$detail = $square->getSquareDetail($id);

if($mode === "like"){
	$newLike = (int) $detail['sq_likes'] + 1;
    $dataUpdate = [
        "sq_likes" => $newLike
    ];
    
}else{
	$newDislike = (int) $detail['sq_dislikes'] + 1;
    $dataUpdate = [
        "sq_dislikes" => $newDislike
    ];
}
$square->updateSquareDetails($id, $dataUpdate);

?>
