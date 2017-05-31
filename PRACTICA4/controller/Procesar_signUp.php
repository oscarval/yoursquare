<?php
session_start();
include_once("SignUp.php");
include_once("Squares.php");

$signUp = new SignUp($_REQUEST["uname"],$_REQUEST["psw"],$_REQUEST["pais"],$_REQUEST["email"], $_REQUEST["sex"]);
if ($insertUser = $signUp->isSignUp()){
    if(isset($_SESSION["sq_squareid"])){
      $sq = new Squares();
      $contentSq = $sq->getSquaresSessionId(session_id());
      if($contentSq){
        $data = [];
        $data["sq_userid"] = $insertUser["idinsert"];
        $data["sq_updatedate"] = date("Y-m-d H:i:s");
        $data["sq_usersession"] = null;
        $data["sq_image"] = "square_".$_SESSION["sq_squareid"].".png";
        $sq->updateSquareDetails($_SESSION["sq_squareid"],$data);
        unset($_SESSION["sq_squareid"]);
      }
    }
  	header("Location: ../views/index.php");
}
else
	header("Location: ../views/error_signUp.php");
?>
