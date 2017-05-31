<?php
include_once("../controller/Squares.php");
include_once("../controller/Usuarios.php");
include_once("../controller/Tags.php");

$squares = new Squares();
$userDao = new Usuarios();
$tagsDao = new Tags();
$userNameSq = null;
$squareDetail = null;
$squareDetail = $squares->getSquareDetail($_GET["id"]);
$userNameSq = $userDao->getUser($squareDetail["sq_userid"]);
$sqImg = ($squareDetail["sq_image"]) ? "../img/squaresthumb/".$squareDetail["sq_image"] : "../img/squaresthumb/no-imageG.png";
$titulo = $squareDetail["sq_title"];
$desc = $squareDetail["sq_description"];
$tags = $tagsDao->getTagsSquare($squareDetail["sq_squareid"]);
$tagsText = "";
foreach ($tags as $key) {
  $tagsText  .= $key["tag_name"].",";
}
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
    <h2 class="title-square-details"><?php echo $titulo;?></h2>
    <div id='wrapper-square'>
      <img src="<?php echo $sqImg; ?>"/>
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
            if(isset($_SESSION["login"]) && $squareDetail['sq_userid'] == $_SESSION["id"]){
              echo '<span class="editar-square" ><a href="editar_square.php" class="boton-editar-square">Editar Square</a></span>';
            }
        ?>
    </div>
    <div>
      <p class="des-square-detail"><?php echo $desc; ?></p>
    </div>
    <div>
      <p class="tags-square-detail">Tags: <?php echo $tagsText; ?></p>
    </div>
    <?php include('Comments.php') ?>
  </div>
</main>
<!-- Fin Main Content -->
