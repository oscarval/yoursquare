<?php
include_once("../mode/MySQLFunctions.php");
$functions = new MySQLFunctions();
$nombre = $_REQUEST['query'];
$sql = $functions->select("select usr_usuario from usuarios","usr_usuario like '%".$nombre."%'","limit 0,10"); //Falta poner "LIKE"
$listNombres = $functions->getResponse();
$output = '[';
if($listNombres["status"])
 {
    foreach($listNombres["data"] as $item){
      $output .= "'".$item["usr_usuario"]."',";
    }
    $output .= ']';
    echo $output;
 }
 else{
	 echo '[]';
 }
 ?>
