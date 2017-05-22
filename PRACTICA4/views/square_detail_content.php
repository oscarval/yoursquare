<?php
include("../controller/Squares.php");

$squares = new Squares();
$userNameSq = null;
$squareDetail = null;
$squareDetail = $squares->getSquareDetail($_GET["id"]);
$userNameSq = $squares->getUserNameFromSquare($squareDetail["sq_userid"]);
//$html = "<a href='square_detail.php?id=%s'><div class='item'>%s usuario</div></a>";
?>
<!-- <main id="main-withoutsidebar-right"> -->
<main id="main">
  <section class="intro">
        <?php
            echo "<div class='imgcontainer_detail'><a href='user.php?usr_id=".$squareDetail["sq_userid"]."'><img src='../img/img_avatar2.png' alt='Avatar' class='avatar_detail'><span id='nombrePerfil_detail'>".$userNameSq["usr_usuario"]."</span></a><span id='fechaPerfil'>".$squareDetail["sq_createdate"]."</span></div>
                  <div id='wrapper-square' class='bambu'>
                    <div class='content-background-square'>
                        <div class='content-intro-square'>
        
                        <h1>".$squareDetail["sq_title"]."</h1>";
            //<p>Contenido de tu Square</p>
            //<p>Puede meter varias lÃ­neas</p>
        ?>
        </div>
      </div>
    </div>
  </section>
  <div id="footer-square">
    <div class="like-dislike-container">
        <img src="../img/like-flat.png" alt="Like" title="Mensaje"/> <span class="like">43</span>
        <img src="../img/like-flat.png" alt="Like" title="Mensaje"/> <span class="dislike">13</span>
        <a href="square_detail.html"><span id="comment-link">Comentar</span></a>
    </div>
    <!--<div id="comments-box">
        <a href="usuario.html"><img src="../img/img_avatar2.png" alt="Avatar" class="avatar_comment"><span class="nombrePerfil_comment">oscarval</span></a>
        <p class="comment-user">Me encanta este square!! Aquí tienes mi like!!</p>
        <a href="usuario.html"><img src="../img/img_avatar2.png" alt="Avatar" class="avatar_comment"><span class="nombrePerfil_comment">xuebozhu</span></a>
        <p class="comment-user">Gracias por tu like! Un saludo!</p>
    </div>-->


  </div>
</main>
<!-- Fin Main Content -->

