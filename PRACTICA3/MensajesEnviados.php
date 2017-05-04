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
          echo "<div class='cabecera_mensajes'><div>Estado</div><div>Asunto</div><div>Emisor</div><div>Fecha</div></div>";
          foreach($allmensajes as $item){
            // echo "<p><input type='checkbox' name='".$item["men_mensajeid"]."'><a href='MensajeView.php'>De:".$item["emisor"]." Titulo:".$item["men_subject"]." fecha: ".$item["men_createdate"]."</a></p>";
            echo "<div class='item_mensajes'>";
                    if($item["men_abierto"]){
                      echo "<div><img src='../img/leido.png' /></div>".
                           "<div>".$item["men_subject"]."</div>";
                    }else{
                      echo "<div><img src='../img/no_leido.png' /></div>".
                          "<div class='strong'>".$item["men_subject"]."</div>";
                    }
               echo "<div>".$item["emisor"]."</div>".
                    "<div>".$item["men_createdate"]."</div>".
                  "</div>";
          }
        ?>
      </form>
			</fieldset>
	  </section>
    </main>
<?php
	include("footer.php");
?>
