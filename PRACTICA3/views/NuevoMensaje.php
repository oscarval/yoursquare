<?php
include("cabecera.php");
include("SidebarLeftMensajes.php");
?>
<main id='main-withoutsidebar-right'>
  <section class='intro'>
    <fieldset>
      <legend>Mensaje nuevo:</legend>
      <form>
        Para: <input type='text' name='Destinatario' size='50'>
        Asunto: <input type='text' name='Asunto' size='50'>
        <textarea name='mensaje' rows='30' cols='70'>
        </textarea>
        <input type='submit' value='Enviar'>
      </form>
    </fieldset>
  </section>
</main>
<?php
include("footer.php");
?>
