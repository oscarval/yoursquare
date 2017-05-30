<?php
$squares = new Squares();
$squaresList = null;

if(isset($_SESSION["login"])){
  $squaresList = $squares->getSquaresUserLogin($_GET["usr_id"], 10);
  $user = $daoUser->getUser($_GET["usr_id"]);
  $html = "<p><a href='square_detail.php?id=%s'><div class='square'><img src='../img/squaresthumb/%s'/></div><h4>%s</h4></a></p>";
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
			<h1><?php echo $user['usr_usuario']?></h1>
			<?php
			if(isset($_SESSION["login"]) && $_SESSION["login"] === true && $_SESSION["isAdmin"] == "1" && ($_GET["usr_id"] != $_SESSION["id"])){
				$delete = "../controller/DeleteUser.php?usr_id=" . $_GET["usr_id"];
				?>
				<a href=<?php echo '"'.$delete .'"'?>> <img src="../img/eliminar.png"/></a>
			<?php
			}
			?>
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
                  $img = ($val["sq_image"]) ? "thumb_".$val["sq_image"] : "no-image.png";
			            echo sprintf($html,$val["sq_squareid"],$img,$val["sq_title"]);
			            ?>
			            <div class="like-dislike-container">
        <?php
            $likes = $squareDetail['sq_likes'];
            $dislikes = $squareDetail['sq_dislikes'];
            if($dislikes === null){
              $dislikes = 0;
            }
            if($likes === null){
              $likes = 0;
            }
            echo "<img src='../img/like-flat.png' alt='Like' title='Mensaje' onclick = 'like(".$squareDetail["sq_squareid"].");'/>";
            echo "<span class='like'>".$likes."</span>";
            echo "<img src='../img/dislike-flat.png' alt='Like' title='Mensaje' onclick = 'dislike(".$squareDetail["sq_squareid"].");'/>";
            echo "<span class='dislike'>".$dislikes."</span>";
        ?>
    </div>
<?php
							if(isset($_SESSION["login"]) && $_SESSION["login"] === true && $_SESSION["isAdmin"] == "1" || ($_GET["usr_id"] === $_SESSION["id"])){
								$deleteSquare = "../controller/DeleteSquare.php?sq_squareid=" . $val["sq_squareid"];
								?>
								<a href=<?php echo '"'.$deleteSquare .'"'?>><img src="../img/eliminar.png"/></a>
							<?php
							}
							?>
			        </div>
			    <?php
				}
			}
			?>
		    </div>
	    </section>

	</body>
	</html>
<?php
}else{
  include("error_acceso.php");
}
?>
