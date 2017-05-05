<?php
// página para la creación del square
include("cabecera.php");
echo '<link href="../css/style_contacto.css" rel="stylesheet" type="text/css" />';
$mensaje= "";
if(count($_REQUEST) > 0 && ($_REQUEST["nombre"] || $_REQUEST["email"] || $_REQUEST["option"] || $_REQUEST["Consulta"])){
  if($_REQUEST["nombre"] && $_REQUEST["email"] && $_REQUEST["option"] && $_REQUEST["Consulta"]){
      $email = "oscarval@ucm.es";
      $subject = "Contacto mediante web";
      $body = "<h3>Se ha contactado la siguiente persona</h3>";
      $body .= "<p><strong>Nombre:</strong> ".$_REQUEST["nombre"]."</p>";
      $body .= "<p><strong>Email:</strong> ".$_REQUEST["email"]."</p>";
      $body .= "<p><strong>Opción:</strong>Opción ".$_REQUEST["option"]."</p>";
      $body .= "<p><strong>Consulta:</strong></p>";
      $body .= "<p>".$_REQUEST["Consulta"]."</p>";
      if(mail($email,$subject,$body)){
        $mensaje = "Su mensaje se ha enviado correctamente";
      }else{
        $mensaje = "Su mensaje no ha podido enviarse. Intentelo de nuevo mas tarde";
      }
  }else{
    $mensaje = "Rellene todos los datos por favor";
  }
}
?>
<!-- Main Content cambiar de id #main-withoutsidebar-right si no tiene sidebar derecho-->
  <main id="main-withoutsidebar">
  <!-- <main id="main"> -->
  <section class="intro">
    <div>
      <p><?php echo $mensaje; ?></p>
      <form method="post">
        <h1 class="center">Formulario de contacto</h1>
        <div class="row-label">
          <label>Nombre:</label>
          <input id="text_nombre" type="text" name="nombre" placeholder="Introduce tu nombre">
        </div>
        <div class="row-label">
          <label>Email:</label>
          <input id="text_email" type="email" name="email" placeholder="Introduce tu email" required>
        </div>
        <div class="motivos row-label">
          <label>Motivo de consulta:</label>
          <input type="radio" name="option" value="Evaluación"> Evaluación
          <input type="radio" name="option" value="Sugerencias"> Sugerencias
          <input type="radio" name="option" value="Críticas"> Críticas
        </div>
        <div class="row-label">
          <label>Consulta:</label>
          <textarea name="Consulta" placeholder="Escriba aquí su consulta"> </textarea>
        </div>
        <div class="row-label">
          <input type="checkbox" name="terminos" value="terminos" required> Marque esta casilla para verificar que ha leído nuestros términos y condiciones
        </div>
        <div class="row-label button_enviar center">
          <input type="submit" value="Enviar" class="enviar">
        </div>
      </form>
    </div>
  </section>
  </main>
<?php
include("footer.php");
?>
