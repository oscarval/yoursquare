<?php
$id = $_REQUEST["id"];
$mode = $_REQUEST["mode"];
$square = new Squares();
/* Hace falta hace un update square y devolver el valor nuevo de likes o dislikes depedniendo del modo en el que este*/

if($mode === "like"){
    $dataUpdate = [
        "sq_likes" => "sq_likes + 1"
    ];
    
}else{
    $dataUpdate = [
        "sq_dislikes" => "sq_likes + 1"
    ];
}
$square->updateSquareDetails($id, $dataUpdate);

?>