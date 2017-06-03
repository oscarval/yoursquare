<?php
// página para el registro de un nuevo usuario
include("cabecera.php");
include("indexsidebar.php");
?>
<h3>
	Error:

</h3>
	El nombre de usuario ya existe. Inténtalo otra vez!
</p>
<form action="signUp.php" method="post" id="signUp" >
<div class="row-label button_enviar center">
  <input type="submit" value="Volver a intentarlo" class="enviar">
</div>
</form>
<?php
include("footer.php");
?>
