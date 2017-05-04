<?php 
session_start(); 
include("connect.php");
$usuario=$_REQUEST["uname"];
$password=$_REQUEST["psw"];
// output data of each row
$sql = "SELECT id, usuario, password FROM usuarios";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
	
	if ($usuario ==$row["usuario"] )
		echo $row["usuario"];
}
?>
