<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>
      YourSquare
    </title>
    <meta charset="UTF-8">
	<!-- Link CSS -->
  <link href="https://fonts.googleapis.com/css?family=Monoton|PT+Sans" rel="stylesheet">    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/styleXuebo_index.css" rel="stylesheet" type="text/css" />
  </head>
  <!-- Cabecera  -->
    <?php 
		include("cabecera.php"); 
	?>
  <!-- Fin Cabecera -->
  <body>
  <!-- sidebar izquierdo -->
    <?php 
		include("indexsidebar.php"); 
	?>
	<!-- Main Content cambiar de id #main-withoutsidebar-right si no tiene sidebar derecho-->
    <main id="main-withoutsidebar-right">
    <!-- <main id="main"> -->
	  <section class="intro">
		<div class="container">
            <a href="square_detail.html"><div class="item">1</div></a>
            <a href="square_detail.html"><div class="item">2</div></a>
            <a href="square_detail.html"><div class="item">3</div></a>
            <a href="square_detail.html"><div class="item">4</div></a>
            <a href="square_detail.html"><div class="item">5</div></a>
            <a href="square_detail.html"><div class="item">6</div></a>
            <a href="square_detail.html"><div class="item">7</div></a>
            <a href="square_detail.html"><div class="item">8</div></a>
            <a href="square_detail.html"><div class="item">9</div></a>
        </div>
	  </section>
    </main>
	<!-- Fin Main Content -->
  <!-- Sidebar de la derecha - comentar si no se quiere-->
    <!-- <aside id="sidebar-right">
      caje de la derecha
    </aside> -->
	<!-- Footer -->
    <footer id="footer">
      <address>
        Por <a href="mailto:info@yoursquare.com">YourSquare</a>
      </address>
      <p>Copyright YourSquare 2017</p>
    </footer>
	<!-- Fin Footer -->
  </body>
</html>
