<?php
session_start();
include_once("Squares.php");
if($_REQUEST["data"]){
  $data = $_REQUEST["data"];
  $sq = new Squares();
  $data["sq_updatedate"] = date("Y-m-d H:i:s");
  echo $sq->updateSquareDetails($_SESSION["sq_squareid"],$data);
}
?>
