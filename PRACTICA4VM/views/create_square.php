<?php
include("cabecera_square.php");
// cada vez que accedemos a crear el square, creamos o obtenemos un registro para no perder cambios
include_once("../controller/Squares.php");
// array de valores para crear el square
$arrIn = [
  "sq_createdate" => date("Y-m-d H:i:s"),
  "sq_updatedate" => date("Y-m-d H:i:s")
];
$sq = new Squares();

if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
  $arrIn["sq_userid"] = $_SESSION["id"];
  $contentSq = $sq->getSquaresPendiente($_SESSION["id"]);
}else{
  $arrIn["sq_usersession"] = session_id();
  $contentSq = $sq->getSquaresSessionId(session_id());
}
if(!$contentSq){
  $respIDInsert = $sq->createSquare($arrIn);
  $_SESSION["sq_squareid"] = $respIDInsert;
}else{
  $contentSq = $contentSq[0];
  $_SESSION["sq_squareid"] = $contentSq["sq_squareid"];
  echo "<script>var htmlSession='".str_replace(array("\r\n", "\n", "\r","'"), ' ', $contentSq["sq_htmlcontent"])."';</script>";
}
include("SidebarLeftCreateSquare.php");
include("content_create_square.php");
include("footer.php");
?>
