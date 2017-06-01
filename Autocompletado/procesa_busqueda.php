<?php
include("MySQLFunctions.php");
$functions = new MySQLFunctions();
$nombre = $_POST['query'];
echo $nombre;
$connect = $functions->openBD;
$sql=$functions->select("select usr_usuario from usuarios","",""); //Falta poner "LIKE"
if($sql != '')  
 {  
      $output = '';   
      $result = mysqli_query(connect, $sql);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["usr_usuario"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>Nombre no encontrado</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }
 else{
	 echo '<p> NADA </p>'; 
 }
 ?>