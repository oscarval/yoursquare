<!DOCTYPE html>
<html lang="es">
       <head>
       <title>
       YourSquare
       </title>
       <meta charset="UTF-8">
       <!-- Link CSS -->
       <link href="https://fonts.googleapis.com/css?family=Monoton|PT+Sans" rel="stylesheet">
       <link href="../css/style.css" rel="stylesheet" type="text/css"/>
  
       </head>
<?php
  include("cabecera.php");
	include("SidebarLeftMensajes.php");
  include("../controller/Mensajes.php");
?>
	<!-- Main Content cambiar de id #main-withoutsidebar-right si no tiene sidebar derecho-->
    <main id='main-withoutsidebar-right'>
    <!-- <main id='main'> -->
	  <section class='intro'>
		<fieldset>
			<h2> Bandeja de entrada </h2>
			<form>
  			<!-- <button type='submit'>Eliminar</button><br> -->
        <?php
          $mensajes = new Mensajes();
          $allmensajes = $mensajes->getBandejaEntrada($_SESSION["id"]);
          foreach($allmensajes as $item){
            echo "<p><input type='checkbox' name='".$tiem["men_mensajeid"]."'><a href='MensajeView.php'>De:".$item["men_remitenteid"]." Titulo:".$item["men_subject"]." fecha: ".$item["men_createdate"]."</a></p>";
          }
        ?>
      </form>
			</fieldset>
	  </section>
    </main>
<?php
	include("footer.php");
?>
