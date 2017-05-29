<?php
include('../controller/Comments.php');


$commentsDao = new Comments();



	
	$listComents = $commentsDao->getCommentsBySquare($squareDetail['sq_squareid']);

	?>
	<link href="css/style-comments.css" rel="stylesheet" type="text/css" />

	<p><strong>Comentarios • </strong><span><?php echo (empty($listComents)) ? "0" : count($listComents);?></span></p>
	<?php
	if (isset($_SESSION["login"]) && $_SESSION["login"] === true){
		$user = $userDao->getUser($_SESSION['id']);
	?>
		<div id="nuevo_comentario">
			<img src="<?php echo $user['usr_avatar']?>"/>
			<form method="post" action="../controller/AddComment.php?sq_squareid=<?php echo $squareDetail['sq_squareid']?>&usr_id=<?php echo $user['usr_id']?>&sq_userid=<?php echo $squareDetail['sq_userid']?>" enctype="multipart/form-data">
			 	<textarea name="Consulta" placeholder="Escriba aquí su consulta"> </textarea>
			    <div id="button_comment">
			    	<input type="hidden" name="sitio" value="sitio">
			    	<input type="submit" value="Comentar" name="submit" class="custom-file-upload">
				</div>
			</form>
			<div>
				<img src="../img/barra_gris.jpg" />
			</div>
		</div>
	<?php 
	}
	else
		echo "<p>Tienes que registrarte para poner comentar este square!</p>";
	?>

	<div id="lista_comentarios">
		<!-- Inicio del bucle -->
		<?php 
		if (count($listComents)> 0 && $listComents != false){
			foreach ($listComents as $comment ) {
				$userofComment = $userDao->getUser($comment['comm_idCreator']);
		?>
				<div id="comentario">
					<a href="<?php echo 'user.php?usr_id='.$userofComment['usr_id']?>"><img src="<?php echo $userofComment['usr_avatar']?>"/></a>
					
					<p><?php echo "<a href='user.php?usr_id=". $userofComment['usr_id'] ."'>" .$userofComment['usr_usuario'] ."</a>" ?> • <span><?php echo $comment['comm_date']?></span>
					<?php
					if (isset($_SESSION["login"])  && isset($_SESSION["id"])){
						if($_SESSION["login"] === true && $_SESSION["isAdmin"] == "1" || ($comment["comm_idCreator"] === $_SESSION["id"]) ){
							$deleteComment = "../controller/DeleteComment.php?comm_id=" . $comment["comm_id"];
							?>
							<a href=<?php echo '"'.$deleteComment .'"'?>><img src="../img/eliminar.png"/></a>
						<?php
						}
					}
					?>
					</p>
					<div id="contentenido_comentario">
						<p><?php echo $comment['comm_content']?></p>
					</div>
				</div>
		<!-- Fin del bucle -->
		<?php 
			}	 
		}
		?>
	</div>

