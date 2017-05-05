<?php
// página para el registro de un nuevo usuario
include("cabecera.php");
include("indexsidebar.php");
?>

<form action="../controller/Procesar_signUp.php" method="post" id="signUp" >
<h1 class="center">Únete a YOURSQUARE</h1>
<div class="row-label">
  <label>Usuario: </label>
  <input id="text_nombre" type="text" name="uname" placeholder="Introduce tu usuario">
</div>
<div class="row-label">
  <label>Contraseña: </label>
  <input id="text_email" type="text" name="psw" placeholder="Introduce tu contraseña" required>
</div>
<div class="row-label button_enviar center">
  <input type="submit" value="Enviar" class="enviar">
</div>
</form>
<?php
include("footer.php");
?>
