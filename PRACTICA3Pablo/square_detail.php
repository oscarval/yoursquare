<?php session_start();  ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>
      YourSquare
    </title>
    <meta charset="UTF-8">
	<!-- Link CSS -->
    <link href="https://fonts.googleapis.com/css?family=Monoton|PT+Sans" rel="stylesheet">    
    <link href="views/css/style.css" rel="stylesheet" type="text/css" />
    <link href="views/css/styleXuebo_index.css" rel="stylesheet" type="text/css" />
    <link href="views/css/style_XBZ.css" rel="stylesheet" type="text/css" />
    </head>
  <body>
    <!-- Cabecera  -->
    <header id="header">
	  <?php include("cabecera.php");?>
    </header>
	<!-- Fin Cabecera -->
  <!-- sidebar izquierdo -->
     <?php include('indexsidebar_logged.php') ?>
	<!-- Main Content cambiar de id #main-withoutsidebar-right si no tiene sidebar derecho-->
    <!-- <main id="main-withoutsidebar-right"> -->
    <main id="main">
  	  <section class="intro">
    		<div class="imgcontainer_detail"><a href="usuario.html"><img src="img/img_avatar2.png" alt="Avatar" class="avatar_detail"><span id="nombrePerfil_detail">xuebozhu</span></a><span id="fechaPerfil">4 de Marzo de 2017</span></div>
        <div id="wrapper-square" class="bambu">
          <div class="content-background-square">
            <div class="content-intro-square">
                <h1>Título de tu Square</h1>
                <p>Contenido de tu Square</p>
                <p>Puede meter varias líneas</p>
            </div>
          </div>
        </div>
  	  </section>
      <div id="footer-square">
        <div class="like-dislike-container">
            <img src="img/like-flat.png" alt="Like" title="Mensaje"/> <span class="like">43</span>
            <img src="img/like-flat.png" alt="Like" title="Mensaje"/> <span class="dislike">13</span>
            <a href="square_detail.html"><span id="comment-link">Comentar</span></a>
        </div>
        <div id="comments-box">
            <a href="usuario.html"><img src="img/img_avatar2.png" alt="Avatar" class="avatar_comment"><span class="nombrePerfil_comment">oscarval</span></a>
            <p class="comment-user">Me encanta este square!! Aqu� tienes mi like!!</p>
            <a href="usuario.html"><img src="img/img_avatar2.png" alt="Avatar" class="avatar_comment"><span class="nombrePerfil_comment">xuebozhu</span></a>
            <p class="comment-user">Gracias por tu like! Un saludo!</p>
        </div>
      </div>
    </main>
	<!-- Fin Main Content -->
	<!-- Footer -->
    <?php include("footer.php"); ?>
	<!-- Fin Footer -->
  </body>
</html>
