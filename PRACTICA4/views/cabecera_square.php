<?php session_start();?>

<!DOCTYPE html>
<html lang="es">
      <head>
      <title>
      YourSquare
      </title>
      <meta charset="UTF-8">
      <!-- Link CSS -->
      <link href="https://fonts.googleapis.com/css?family=Monoton|PT+Sans" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
      <link href="css/styleXuebo_index.css" rel="stylesheet" type="text/css" />
      <link href="css/style_AV.css" rel="stylesheet" type="text/css" />
      <link href="css/medium.css" rel="stylesheet" type="text/css" />
      <link href="css/dragula.css" rel="stylesheet" type="text/css" />
      <script src="js/lib/rangy-core.js"></script>
      <script src="js/lib/rangy-classapplier.js"></script>
      <script src="js/lib/undo.js"></script>
      <script src="js/lib/medium.min.js" type="text/javascript"></script>
      <script src="js/lib/interact.min.js" type="text/javascript"></script>
      <script src="js/lib/jquery-3.2.1.min.js" type="text/javascript"></script>
      <script src="js/create_square.js" type="text/javascript"></script>
      <script src='js/lib/dragula-3.7.2.min.js'></script>
      <script src='js/lib/htmlToCanvas.js'></script>

      <script src="js/herramientas.js" type="text/javascript"></script>
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
        <form id='search-form' name='search' accept-charset='UTF-8' action='busqueda.php'>
          <input class='search-field' type='search' name='search-field' />
          <input type ='submit' class='button-search' value='Buscar'/>
        </form>
      </div>
<?php
if(isset($_SESSION["login"])){
    echo "<div class='usuario'>
            <a href='BandejaEntrada.php'><span class='icon'>📭</span></a>
            <a href='user.php'><span class='icon'>🙎</span></a>
          <span>Bienvenido, ";
    echo $_SESSION["username"];
    echo "</span>";
    echo "<form action='../controller/Logout.php'><input type='submit' value='Salir' /></form>
      </div>";
  }
else{
    echo "<a href='SignUp.php' class='button_registrar'>REGÍSTRATE!!</a>";
}
?>
	  <!-- Main Menu  -->
      <div class='main-menu'>
        <nav>
         <ul>
            <li><a href='index.php'>Inicio</a></li>
            <li><a href='create_square.php'>Crea tu Square</a></li>
            <li><a href='FAQ.php'>FAQ</a></li>
<?php
if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"] ){
    echo "<li><a href='admin.php'>Admin</a></li>";
}
?>
<li><a href='contacto.php'>Contacto</a></li>
          </ul>
        </nav>
      </div>
    </header>
	<!-- Fin Cabecera -->
