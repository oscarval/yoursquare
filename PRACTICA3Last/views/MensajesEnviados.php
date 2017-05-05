<?php
  include("cabecera.php");
  echo '<link href="../css/Mensajes.css" rel="stylesheet" type="text/css" />';
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
          $allmensajes = $mensajes->getBandejaSalida($_SESSION["id"]);
          echo "<div class='cabecera_mensajes'><div>Asunto</div><div>Emisor</div><div>Fecha</div></div>";
          foreach($allmensajes as $item){
            // echo "<p><input type='checkbox' name='".$item["men_mensajeid"]."'><a href='MensajeView.php'>De:".$item["emisor"]." Titulo:".$item["men_subject"]." fecha: ".$item["men_createdate"]."</a></p>";
            echo "<a href='MensajeView.php?id=".$item["men_mensajeid"]."'><div class='item_mensajes'>".
                   "<div><img src='../img/send.png' /></div>".
                   "<div>".$item["men_subject"]."</div>".
                   "<div>".$item["emisor"]."</div>".
                   "<div>".$item["men_createdate"]."</div>".
                 "</div></a>";
          }
        ?>
      </form>
			</fieldset>
	  </section>
    </main>
<?php
	include("footer.php");
?>
