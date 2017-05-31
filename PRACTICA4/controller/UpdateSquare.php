<?php
session_start();
include_once("Squares.php");
include_once("Tags.php");
if($_REQUEST["data"]){
  $data = $_REQUEST["data"];
  $sq = new Squares();
  $data["sq_updatedate"] = date("Y-m-d H:i:s");
  if(isset($_REQUEST["titulo"])){
      $data["sq_title"] = $_REQUEST["titulo"];
  }
  if(isset($_REQUEST["descripcion"])){
      $data["sq_description"] = $_REQUEST["descripcion"];
  }
  if(isset($_REQUEST["img"])){
      if($_REQUEST["img"] != ""){
        $data["sq_image"] = $_REQUEST["img"];
      }
      // guardamos las tags que haya puesto el usuario
      if(isset($_REQUEST["tags"]) && $_REQUEST["tags"] != ""){
        $t = new Tags();
        $tags = explode(",",$_REQUEST["tags"]);
        for($i = 0; $i<count($tags);$i++){
          if($tags[$i] != "" ){
            $t->insertTags($tags[$i],$_SESSION["sq_squareid"]);
          }
        }
      }
  }


  echo $sq->updateSquareDetails($_SESSION["sq_squareid"],$data);
}
?>
