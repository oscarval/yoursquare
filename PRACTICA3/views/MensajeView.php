<?php
  include("cabecera.php");
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
      <p>De: <?php echo $resp["emisor"];?></p>
      <p>Para: <?php echo $resp["receptor"];?></p>
      <p>Asunto: <?php echo $resp["men_subject"];?></p>
      <p>Mensaje:</p>
      <p><?php echo $resp["men_body"];?></p>
    </div>
  </section>
</main>
<?php
	include("footer.php");
?>
