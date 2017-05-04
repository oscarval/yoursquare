<!DOCTYPE html>
<html lang="es">
      <head>
      <title>
      YourSquare
      </title>
      <meta charset="UTF-8">
      <!-- Link CSS -->
      <link href="https://fonts.googleapis.com/css?family=Monoton|PT+Sans" rel="stylesheet">
      <link href="css/styleXuebo_index.css" rel="stylesheet" type="text/css" />
      </head>
<!-- Cabecera  -->
    <header id='header'>
	  <!-- Logo  -->
      <div class='logo'>
        <!--<img src='img/logo.png' alt='YourSquare' title='YourSquare'/>-->
          <span id='LOGO'> YOURSQUARE</span>
        <h3 class='slogan'>All in one Square</h3>
      </div>
      <div class='busqueda'>
        <form id='search-form' name='search' accept-charset='UTF-8' action='buscar.html'>
          <input class='search-field' type='search' name='search-field' />
          <input type ='submit' class='button-search' value='Buscar'/>
        </form>
      </div>
<?php
if(isset($_SESSION["login"])){
    echo "<div class='usuario'>
            <a href='Bandeja_Entrada.html'><span class='icon'>📭</span></a>
            <a href='usuario.html'><span class='icon'>🙎</span></a>
          <span>Bienvenido, ";
    echo $_SESSION["username"];
    echo "</span>
      </div>";
        }
?>
	  <!-- Main Menu  -->
      <div class='main-menu'>
        <nav>
         <ul>
            <li><a href='index.html'>Inicio</a></li>
            <li><a href='create_square_bambu.html'>Crea tu Square</a></li>
            <li><a href='FAQ.html'>FAQ</a></li>
<?php
if(isset($_SESSION["isadmin"])){
    echo "<li><a href='admin.html'>Admin</a></li>";
}
?>
<li><a href='contacto.html'>Contacto</a></li>
          </ul>
        </nav>
      </div>
    </header>
	<!-- Fin Cabecera -->
