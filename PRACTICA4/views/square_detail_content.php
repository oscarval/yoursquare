<?php
include("../controller/Squares.php");
include("../controller/Usuarios.php");


$squares = new Squares();
$userDao = new Usuarios();
$userNameSq = null;
$squareDetail = null;
$squareDetail = $squares->getSquareDetail($_GET["id"]);
$userNameSq = $userDao->getUser($squareDetail["sq_userid"]);
$sqImg = ($squareDetail["sq_image"]) ? "../img/squaresthumb/".$squareDetail["sq_image"] : "../img/squaresthumb/no-imageG.png";

//$html = "<a href='square_detail.php?id=%s'><div class='item'>%s usuario</div></a>";
?>
<!-- <main id="main-withoutsidebar-right"> -->
<main id="main">
  <section class="intro">
    <div class='imgcontainer_detail'>
      <a href='user.php?usr_id=<?php echo $squareDetail["sq_userid"]; ?>' class="link_user_square">
        <img src='<?php echo $userNameSq["usr_avatar"]; ?>' alt='Avatar' class='avatar_detail'>
        <span id='nombrePerfil_detail'><?php echo $userNameSq["usr_usuario"]; ?></span>
      </a>
      <span id='fechaPerfil'><?php echo date("Y/m/d H:i", strtotime($squareDetail["sq_createdate"])); ?></span>
    </div>
    <div id='wrapper-square'>
      <img src="<?php echo $sqImg; ?>"/>
    </div>
  </section>
  <div id="footer-square">
    <div class="like-dislike-container">
        <?php
            echo "<img src='../img/like-flat.png' alt='Like' title='Mensaje' onclick = 'like(".$squareDetail["sq_squareid"].");'/>";
            echo "<span class='like'>".$squareDetail["sq_likes"]."</span>";
            echo "<img src='../img/like-flat.png' alt='Like' title='Mensaje' onclick = 'dislike(".$squareDetail["sq_squareid"].");'/>";
            echo "<span class='dislike'>".$squareDetail["sq_dislikes"]."</span>";
        ?>
    </div>
    <?php include('Comments.php') ?>
  </div>
</main>
<!-- Fin Main Content -->
