<?php
session_start();
include_once("Squares.php");
if($_REQUEST["data"]){
  $data = $_REQUEST["data"];
  $sq = new Squares();
  $data["sq_updatedate"] = date("Y-m-d H:i:s");
  $data["sq_title"] = ($_REQUEST["titulo"]) ? $_REQUEST["titulo"] : null;
  $data["sq_description"] = ($_REQUEST["descripcion"]) ? $_REQUEST["descripcion"] : null;
  $data["sq_image"] = ($_REQUEST["img"]) ? $_REQUEST["img"] : null;
  echo $sq->updateSquareDetails($_SESSION["sq_squareid"],$data);
}
?>
