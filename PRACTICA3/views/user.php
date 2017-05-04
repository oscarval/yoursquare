<!DOCTYPE html>
<html lang="es">
      <head>
      <title>
      YourSquare
      </title>
      <meta charset="UTF-8">
      <!-- Link CSS -->
      <link href="https://fonts.googleapis.com/css?family=Monoton|PT+Sans" rel="stylesheet">
      <link href="../css/style.css" rel="stylesheet" type="text/css" />
      <link href="../css/style-user.css" rel="stylesheet" type="text/css" />
      </head>

      <? php include cabecera.php>

      <? php include
      echo="
<main id='main-withoutsidebar'>
      <!-- <main id='main'> -->
  	  <section class='intro'>
        <div>
          <form action='mailto:pcapa@ucm.es' method='post' id='contacto' >
            <h1 class='center'>Formulario de contacto</h1>
            <div class='row-label'>
              <label>Nombre:</label>
              <input id='text_nombre' type='text' name='nombre' placeholder='Introduce tu nombre'>
            </div>
            <div class='row-label'>
              <label>Email:</label>
              <input id='text_email' type='email' name='email' placeholder='Introduce tu email' required>
            </div>
            <div class='motivos row-label'>
              <label>Motivo de consulta:</label>
              <input type='radio' name='option' value='Evaluación'> Evaluación
              <input type='radio' name='option' value='Sugerencias'> Sugerencias
              <input type='radio' name='option' value='Críticas'> Críticas
            </div>
            <div class='row-label'>
              <label>Consulta:</label>
              <textarea name='Consulta' placeholder='Escriba aquí su consulta'> </textarea>
            </div>
            <div class='row-label'>
              <input type='checkbox' name='terminos' value='terminos' required> Marque esta casilla para verificar que ha leído nuestros términos y condiciones
            </div>
            <div class='row-label button_enviar center'>
              <input type='submit' value='Enviar' class='enviar'>
            </div>
          </form>
        </div>
  	  </section>
      </main>
"
      >

      <? php include footer.php>

      </body>
      </html>
