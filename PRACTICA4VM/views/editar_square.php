<?php
include("cabecera_square.php");
include_once("../controller/Squares.php");
$sq = new Squares();
if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
  $contentSq = $sq->getSquareDetail($_REQUEST["sq_squareid"]);
}
if($contentSq){
  $contentSq = $contentSq;
  $_SESSION["sq_squareid"] = $contentSq["sq_squareid"];
  echo "<script>var htmlSession='".str_replace(array("\r\n", "\n", "\r","'"), ' ', $contentSq["sq_htmlcontent"])."';</script>";
}
include("SidebarLeftCreateSquare.php");
include("content_create_square.php");
include("footer.php");
?>
