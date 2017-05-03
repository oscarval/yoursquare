<?php
    include("cabecera.php");
	include("SidebarLeftMensajes.php");
	echo "<!-- Main Content cambiar de id #main-withoutsidebar-right si no tiene sidebar derecho-->
    <main id='main-withoutsidebar-right'>
    <!-- <main id='main'> -->
	
	  <section class='intro'>
		<fieldset>
			<h2> Bandeja de entrada </h2>
			<form>
			<button type='submit'>Eliminar</button><br>
			<input type='checkbox' name='Mensaje_1' ><a href='Mensaje.html'>De:Usuario1 Titulo:Hola fecha: 28/03/17</a><br>
			<input type='checkbox' name='Mensaje_2' ><a href='Mensaje.html'>De:Usuario2 Titulo:Adios fecha: 28/03/17</a><br>
			</form>
			</fieldset>
	  </section>
    </main>";
	include("footer.php");
?>