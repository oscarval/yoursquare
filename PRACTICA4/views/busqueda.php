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
      <link href="css/style_buscar.css" rel="stylesheet" type="text/css" />
      </head>
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

<?php
include("../controller/Search.php");
$search = new Search();
$keyword = $_GET["search-field"];
if(isset($_GET['user'])){
    $result = $search->userSearch($keyword,0,0);  
  if (!empty($result)){
    echo "<section class='intro'>
    <div class='intro-content'>
    <h1 class='center'>Usuarios</h1>";
    foreach($result as $item){ 
          echo "<div class='result_search item '>
                <h3 class='result_title'>".$item['usr_usuario']."</h3><span class='icon'>🙎</span>
                <p><button>Ver el usuario</button></p>
                </div>";
    }
  }
    
}elseif(isset($_GET['square'])){
  $result = $search->squareSearch($keyword,0,0);  
  if (!empty($result)){
    echo "<section class='intro'>
    <div class='intro-content'>
    <h1 class='center'>Squares</h1>";
    foreach($result as $item){ 
      echo "<div class='result_search item '>
        <h3 class='result_title'>".$item['sq_title']."</h3>
        <p class='result_description'>".$item["sq_description"]."<button class='ir'>Ir al square</button></p>
        </div>";
    }
    echo "</div>";
  }


}else{
  $result = $search->generalSearch($keyword);
  if (!empty($result['users'])){
  echo "<section class='intro'>
  <div class='intro-content'>
  <h1 class='center'>Usuarios</h1>";
    foreach($result['users'] as $item){ 
          echo "<div class='result_search item '>
                <h3 class='result_title'>".$item['usr_usuario']."</h3><span class='icon'>🙎</span>
                <p><button onClick=location.href ='user.php?usr_id='". $item['usr_id'] . "'>Ver el usuario</button></p>
                </div>";
    }
  echo "</div></section>";
  }
  if (!empty($result['squares'])){
    echo "<section class='intro'>
    <div class='intro-content'>
    <h1 class='center'>Squares</h1>";
    foreach($result['squares'] as $item){ 
      echo "<div class='result_search item '>
            <h3 class='result_title'>".$item['sq_title']."</h3>
            <p class='result_description'>".$item["sq_description"]."</p>
            <p><button>Ir al square</button></p>
            </div>";
    }
    echo "</div></section>";
  }


}

?>
</main>
    <!-- Fin Main Content -->

<?php include('footer.php') ?>
</body>
</html>