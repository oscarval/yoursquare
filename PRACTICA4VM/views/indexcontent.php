<?php
include("../controller/Squares.php");
$squares = new Squares();
$squaresList = null;
if(!isset($_SESSION["login"])){
  $squaresList = $squares->getSquaresGuest(10);
}
else if(isset($_SESSION["login"]) && $_SESSION["login"] === true && $_SESSION["isAdmin"] == "0"){
  $squaresList = $squares->getSquaresUser(10);
}
else if(isset($_SESSION["login"]) && $_SESSION["login"] === true && $_SESSION["isAdmin"] == "1"  ){
  $squaresList = $squares->getSquaresAdmin(10);
}
$html = "<p><a href='square_detail.php?id=%s'><div class='square'><img src='../img/squaresthumb/%s'/></div><h4>%s</h4></a></p>";
?>
<!-- Main Content cambiar de id #main-withoutsidebar-right si no tiene sidebar derecho-->
<main id="main-withoutsidebar-right">
  <!-- <main id="main"> -->
  <section class="center-user">
    <div id="square-list">
      <?php
      if($squaresList){
        foreach($squaresList as $val){?>
          <div class="user-square-preview">
            <?php
            $img = ($val["sq_image"]) ? "thumb_".$val["sq_image"] : "no-image.png";
            echo sprintf($html,$val["sq_squareid"],$img,$val["sq_title"]);
            ?>
            <div class="like-dislike-container">
              <?php
              $likes = $val['sq_likes'];
              $dislikes = $val['sq_dislikes'];
              if($dislikes === null){
                $dislikes = 0;
              }
              if($likes === null){
                $likes = 0;
              }
              echo "<img src='../img/like-flat.png' alt='Like' title='Mensaje' onclick = 'like(".$val["sq_squareid"].");'/>";
              echo "<span class='like'>".$likes."</span>";
              echo "<img src='../img/dislike-flat.png' alt='Like' title='Mensaje' onclick = 'dislike(".$val["sq_squareid"].");'/>";
              echo "<span class='dislike'>".$dislikes."</span>";
              ?>
            </div>
          </div>
          <?php
        }
      }
      ?>
    </div>
  </section>
</main>
