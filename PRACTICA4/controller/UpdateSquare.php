<?php
session_start();
include_once("Squares.php");
var_dump($_REQUEST["data"]);
if($_REQUEST["data"]){
  $data = $_REQUEST["data"];
  $sq = new Squares();
  $data["sq_updatedate"] = date("Y-m-d H:i:s");
  if(isset($_REQUEST["titulo"]){
      $data["sq_title"] = $_REQUEST["titulo"];
  }
  if(isset($_REQUEST["descripcion"]){
      $data["sq_description"] = $_REQUEST["descripcion"];
  }
  if(isset($_REQUEST["img"]){
      $data["sq_image"] = $_REQUEST["img"];
  }
  echo $sq->updateSquareDetails($_SESSION["sq_squareid"],$data);
}
?>
