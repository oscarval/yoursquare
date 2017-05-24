<?php
$squares = new Squares();
$squaresList = null;

if(isset($_SESSION["login"])){
  $squaresList = $squares->getSquaresUserLogin($_GET["usr_id"], 10);
  $user = $squares->getUserNameFromSquare($_GET["usr_id"]);
  $html = "<p><a href='square_detail.php?id=%s'><div class='square'>&nbsp;</div><h4>%s</h4></a></p>";
}else{
  include("error_acceso.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<!-- Link CSS -->
  	<link href="https://fonts.googleapis.com/css?family=Monoton|PT+Sans" rel="stylesheet">    
  	<link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/style-user.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<!-- Main Content cambiar de id #main-withoutsidebar-right si no tiene sidebar derecho-->
    <main id="main-withoutsidebar-right">
    <!-- <main id="main"> -->
	<section class="center-user">
		<h1><?php echo $user['usr_usuario'] ?></h1>
	    <span> Ordenar por: </span>
		<select>
		  <option value="Mas actual">Mas actual</option>
		  <option value="Mas antiguo">Mas antiguo</option>
		    <option value="Mas likes">Mas Likes</option>
		  <option value="Mas Dislikes">Mas Dislikes</option>
		</select> 

	    <div id="square-list">
	    	<?php
			if($squaresList){
				foreach($squaresList as $val){?>
		        <div class="user-square-preview">
		        	<?php
		            echo sprintf($html,$val["sq_squareid"],$val["sq_title"]);
		            ?>
		            <div class="like-dislike-container">
		                <img src="../img/like-flat.png" alt="Like" title="Mensaje"/> <span class="like">43</span>
		                <img src="../img/like-flat.png" alt="Like" title="Mensaje"/> <span class="dislike">13</span>
		            </div>
		        </div>
		    <?php
			}
		}
		?>
	    </div>
    </section>

</body>
</html>
