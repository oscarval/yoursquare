<!DOCTYPE html>
<html lang="es">
      <head>
      <title>
      YourSquare
      </title>
      <meta charset="UTF-8">
      <!-- Link CSS -->
      <link href="https://fonts.googleapis.com/css?family=Monoton|PT+Sans" rel="stylesheet">    <link href="../css/style.css" rel="stylesheet" type="text/css" />
      <link href="../css/style_buscar.css" rel="stylesheet" type="text/css" />
      </head>

   <?php
      include("../controller/Search.php");
$search = new Search();
$keyword = $_GET["search-field"];
if($_GET['user'] === 1){
    $result = $search->userSearch($keyword);

    echo "<section class='intro'>
        <div class='intro-content'>
            <h1 class='center'>Resultados de Búsqueda</h1>";
    foreach($result as $item){ 
        echo "<div class='result_search item '>
              <h3 class='result_title'>".$item['usr_usuario']."</h3>
              <p><button class='ir'>Ver el usuario</button></p>
            </div>";
        }
    
}elseif($_GET['square'] === 1){
    $result = $search->squareSearch($keyword);

    echo "<section class='intro'>
        <div class='intro-content'>
            <h1 class='center'>Resultados de Búsqueda</h1>";
        foreach($result as $item){ 
            echo "<div class='result_search item '>
              <h3 class='result_title'>".$item['sq_title']."</h3>
              <p class='result_description'>".$item["sq_description"]."<button class='ir'>Ir al square</button></p>
            </div>";
                }

}else{
    $result = $search->generalSearch($keyword);

    echo "<section class='intro'>
        <div class='intro-content'>
            <h1 class='center'>Resultados de Usuarios</h1>";
        foreach($result as $item){ 
            echo "<div class='result_search item '>
              <h3 class='result_title'>".$item['usr_usuario']."</h3>
              <p><button class='ir'>Ver el usuario</button></p>
            </div>";
        }
        
        echo "<section class='intro'>
        <div class='intro-content'>
            <h1 class='center'>Resultados de Squares</h1>";
            foreach($result as $item){ 
                echo "<div class='result_search item '>
              <h3 class='result_title'>".$item['sq_title']."</h3>
              <p class='result_description'>".$item["sq_description"]."<button class='ir'>Ir al square</button></p>
            </div>";
                }
}

?>
<?php include('cabecera.php') ?>
            <main id="main-withoutsidebar">
      <!-- <main id="main"> -->
    
    <form id='search-form-search' name='search' accept-charset='UTF-8' action='busqueda.php'>
          <input class='search-field' type='search' name='search-field' />
Buscar:
          <input type='radio'  name='user' value='1'>Usuarios
    <input type='radio'  name='square' value='1'>Squares
          <input type ='submit' class='button-search' value='Buscar'/>
        </form>

  	  <section class="intro">
        <div class="intro-content">
            <h1 class="center">Resultados de Búsqueda</h1>
            <div class="result_search item first">
              <h3 class="result_title">Título de la Búsqueda 1</h3>
              <p class="result_description">Datos de introducción a la búsqueda 1 <button class="ir">Ir al contenido</button></p>
            </div>
            <div class="result_search item">
              <h3 class="result_title">Título de la Búsqueda 2</h3>
              <p class="result_description">Datos de introducción a la búsqueda 2 <button class="ir">Ir al contenido</button></p>
            </div>
            <div class="result_search item">
              <h3 class="result_title">Título de la Búsqueda 3</h3>
              <p class="result_description">Datos de introducción a la búsqueda 3 <button class="ir">Ir al contenido</button></p>
            </div>
            <div class="result_search item">
              <h3 class="result_title">Título de la Búsqueda 4</h3>
              <p class="result_description">Datos de introducción a la búsqueda 4 <button class="ir">Ir al contenido</button></p>
            </div>
            <div class="result_search item last">
              <h3 class="result_title">Título de la Búsqueda 5 </h3>
              <p class="result_description">Datos de introducción a la búsqueda 5 <button class="ir">Ir al contenido</button></p>
            </div>
            <div class="pagination center">
              <a href="#" class="pag_first"></a>
              <a href="#" class="pag_before"></a>
              <span class="pag_number">1 de 2</span>
              <a href="#" class="pag_next"></a>
              <a href="#" class="pag_last"></a>
            </div>
        </div>
  	  </section>
      </main>
    <!-- Fin Main Content -->

<?php include('footer.php') ?>
</body>
</html>