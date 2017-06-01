<?php
// página para el registro de un nuevo usuario
include("cabecera.php");
include("indexsidebar.php");
echo '<link href="css/style_registrate.css" rel="stylesheet" type="text/css" />';
?>

<main id="main-withoutsidebar-right">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
	<script type="text/javascript" src="js/validacion.js"></script>
  <!-- <main id="main"> -->
  <section class="intro">
    <div>
	<form action="../controller/Procesar_signUp.php" method="post" id="signUp" onsubmit="return validacion()" >
	<h1 class="center">Únete a YOURSQUARE</h1>
	<div class="row-label">
	  <label>Usuario: </label>
	  <input id="text_nombre" type="text" name="uname" placeholder="Introduce tu usuario" required>
	</div>
	<div class="row-label">
	  <p><label>Correo:</label> <input type="text" name="campoEmail" id="campoEmail" /><img style="display:none" src="../img/ok.png" id="okEmail"/> <img style="display:none" src="../img/no.png" id="noEmail"/></p>
	</div>
	<div class="row-label">
	<label>País: </label>
	<input id="text_email" type="label" name="pais" placeholder="Introduce tu país" required>
	</div>
	<div class="row-label">
	  <label>Contraseña: </label>
	  <input id="text_password" type="password" name="psw" placeholder="Introduce tu contraseña" required>
	</div>
	<div class="row-label button_enviar center">
	  <input type="submit" value="Registrarse" class="enviar">
	</div>
	</form>
	</div>
  </section>
  </main>
<?php
include("footer.php");
?>
