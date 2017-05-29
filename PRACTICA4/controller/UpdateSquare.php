<?php
session_start();
include_once("Squares.php");
if($_REQUEST["data"]){
  $data = $_REQUEST["data"];
  $sq = new Squares();
  echo $sq->updateSquareDetails($_SESSION["sq_squareid"],$data);
}
?>
