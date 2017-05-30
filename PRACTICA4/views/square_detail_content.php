<?php
include("../controller/Squares.php");
include_once("../controller/Usuarios.php");


$squares = new Squares();
$daoUser = new Usuarios();
$userNameSq = null;
$squareDetail = null;
$squareDetail = $squares->getSquareDetail($_GET["id"]);
$userNameSq = $daoUser->getUser($squareDetail["sq_userid"]);

//$html = "<a href='square_detail.php?id=%s'><div class='item'>%s usuario</div></a>";
?>
<!-- <main id="main-withoutsidebar-right"> -->
<main id="main">
  <section class="intro">
        <?php
            echo "<div class='imgcontainer_detail'><a href='user.php?usr_id=".$squareDetail["sq_userid"]."'><img src='". $userNameSq['usr_avatar'] ."' alt='Avatar' class='avatar_detail'><span id='nombrePerfil_detail'>".$userNameSq["usr_usuario"]."</span></a><span id='fechaPerfil'>".$squareDetail["sq_createdate"]."</span></div>
                  <div id='wrapper-square' class='bambu'>
                    <div class='content-background-square'>
                        <div class='content-intro-square'>
        
                        <h1>".$squareDetail["sq_title"]."</h1>";
            //<p>Contenido de tu Square</p>
            //<p>Puede meter varias líneas</p>
        ?>
        </div>
      </div>
    </div>
  </section>
  <div id="footer-square">
    <div class="like-dislike-container">
        <?php
            $likes = $squareDetail['sq_likes'];
            $dislikes = $squareDetail['sq_dislikes'];
            if($dislikes === null){
              $dislikes = 0;
            }
            if($likes === null){
              $likes = 0;
            }
            echo "<img src='../img/like-flat.png' alt='Like' title='Mensaje' onclick = 'like(".$squareDetail["sq_squareid"].");'/>";
            echo "<span class='like'>".$likes."</span>";
            echo "<img src='../img/dislike-flat.png' alt='Like' title='Mensaje' onclick = 'dislike(".$squareDetail["sq_squareid"].");'/>";
            echo "<span class='dislike'>".$dislikes."</span>";
        ?>
    </div>
    <?php include('Comments.php') ?>
  </div>
</main>
<!-- Fin Main Content -->


