<?php
  include("cabecera.php");
	include("SidebarLeftMensajes.php");
  include("../controller/Mensajes.php");
  echo "<script>alert('hh');</script>";
  // control de envio de mensaje
  if($_REQUEST["Destinatario"] && $_REQUEST["Asunto"] && $_REQUEST["mensaje"]){
    echo "hola";
  }else{
    echo "nada";
  }
?>
<main id='main-withoutsidebar-right'>
  <section class='intro'>
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
</main>";
<?php
	include("footer.php");
?>
