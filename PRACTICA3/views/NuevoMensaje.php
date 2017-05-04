<?php
  include("cabecera.php");
	include("SidebarLeftMensajes.php");
  include("../controller/Mensajes.php");
  $noti = "";
  // control de envio de mensaje
  if(count($_REQUEST) >0 && $_REQUEST["Destinatario"] && $_REQUEST["Asunto"] && $_REQUEST["mensaje"]){
      $send = new Mensajes();
      if($send->sendEmail($_SESSION["id"],$_REQUEST["Destinatario"],$_REQUEST["Asunto"],$_REQUEST["mensaje"])){
        $noti = "<p>Mensaje enviado correctamente</p>";
      }else{
        $noti = "<p>Error al enviar el mensaje</p>";
      }
  }
?>
<main id='main-withoutsidebar-right'>
  <section class='intro'>
    <?php echo $noti; ?>
    <fieldset>
      <legend>Mensaje nuevo:</legend>
      <form method="POST">
        Para: <input type='text' name='Destinatario' size='50'><br><br>
        Asunto: <input type='text' name='Asunto' size='50'><br><br>
        <textarea name='mensaje' rows='30' cols='70'></textarea>
        <p><input type='submit' value='Enviar'></p>
      </form>
    </fieldset>
  </section>
</main>
<?php
	include("footer.php");
?>
