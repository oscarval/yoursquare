<?php
include("../controller/Squares.php");
$squares = new Squares();
$squaresList = null;
if(!isset($_SESSION["login"])){
  $squaresList = $squares->getSquaresGuest(10);
  $html = "<a href='square_detail.php?id=%s'><div class='item'>%s invitado</div></a>";
}
else if(isset($_SESSION["login"]) && $_SESSION["login"] === true && $_SESSION["isAdmin"] == "0"){
  $squaresList = $squares->getSquaresUser(10);
  $html = "<a href='square_detail.php?id=%s'><div class='item'>%s usuario</div></a>";
}
else if(isset($_SESSION["login"]) && $_SESSION["login"] === true && $_SESSION["isAdmin"] == "1"  ){
  //var_dump($_SESSION);
  $squaresList = $squares->getSquaresAdmin(10);
  $html = "<a href='square_detail.php?id=%s'><div class='item'>%s admin</div></a>";
}

?>
<main id='main-withoutsidebar-right'>
    <!-- <main id='main'> -->
	  <section class='intro'>
		<div class='container'>
        <?php
            if($squaresList){
              foreach($squaresList as $val){
                echo sprintf($html,$val["sq_squareid"],$val["sq_title"]);
                // echo "<a href='square_detail.php?id=".$val["sq_squareid"]."'><div class='item'>".$val["sq_title"]."</div></a>";
              }
            }else{
              echo "<p>Sin Contenido</p>";
            }
        ?>
            <!-- <a href='square_detail.php'><div class='item'>2</div></a>
            <a href='square_detail.php'><div class='item'>2</div></a>
            <a href='square_detail.php'><div class='item'>3</div></a>
            <a href='square_detail.php'><div class='item'>4</div></a>
            <a href='square_detail.php'><div class='item'>5</div></a>
            <a href='square_detail.php'><div class='item'>6</div></a>
            <a href='square_detail.php'><div class='item'>7</div></a>
            <a href='square_detail.php'><div class='item'>8</div></a>
            <a href='square_detail.php'><div class='item'>9</div></a> -->
        </div>
	  </section>
    </main>
