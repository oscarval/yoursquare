<?php
    include("cabecera.php");
	include("SidebarLeftMensajes.php");
    echo"<main id='main-withoutsidebar-right'>
    <!-- <main id='main'> -->
	  <section class='intro'>
		<fieldset>
			<h2> Mensajes Enviados </h2>
			<form>
			<button type='submit'>Eliminar</button><br>
			<input type='checkbox' name='Mensaje_1' ><a href='Mensaje.html'>Para:Usuario1 Titulo:Adios fecha: 29/03/17</a><br>
			<input type='checkbox' name='Mensaje_2' ><a href='Mensaje.html'>Para:Usuario2 Titulo:Hola fecha: 29/03/17</a><br>
			</form>
			</fieldset>
	  </section>
    </main>";
	include("footer.php");
?>	
