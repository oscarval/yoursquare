<?php
    include("cabecera.php");
	include("SidebarLeftMensajes.php");
    echo"<main id='main-withoutsidebar-right'>
	  <section class='intro'>
		<fieldset>
		<legend>Mensaje nuevo:</legend>
		<form>
			Para: <input type='text' name='Destinatario' size='50'><br><br>
			Asunto: <input type='text' name='Asunto' size='50'><br><br>
		<textarea name='mensaje' rows='30' cols='70'>
		</textarea><br><br>
			<input type='submit' value='Enviar'>
		</form>
		</fieldset>
	  </section>
    </main>";
	include("footer.php");
?>