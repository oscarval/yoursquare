<?php
  include("cabecera.php");
  echo '<link href="css/Mensajes.css" rel="stylesheet" type="text/css" />';
	include("SidebarLeftMensajes.php");
  include("../controller/Mensajes.php");
  // control de envio de mensaje
  if(count($_REQUEST) >0 && $_REQUEST["id"]){
      $mensaje = new Mensajes();
      $resp = $mensaje->getMensajeById($_REQUEST["id"]);
      $mensaje->marcarComoLeido($_REQUEST["id"]);
  }
?>
<main id='main-withoutsidebar-right'>
  <section class='intro'>
    <div class="mensaje_read">
	<fieldset>
	  <h1><?php echo $resp["men_subject"];?></h1>
	  <p><?php echo $resp["men_createdate"];?></p>
      <p>De:  <?php echo $resp["emisor"];?></p>
      <p>Para: <?php echo $resp["receptor"];?></p>
      <p><?php echo $resp["men_body"];?></p>
	</fieldset>
    </div>
  </section>
</main>
<?php
	include("footer.php");
?>
