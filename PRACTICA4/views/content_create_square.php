<?php
// para obtener tags
include_once("../controller/Tags.php");
$t = new Tags();
$tags = $t->getTags("%");
$listTags = "[";
foreach($tags as $item){
  $listTags .= "'".$item["tag_name"]."',";
}
$listTags .= "]";
$tagsText = "";
$titulo = "";
$desc = "";

// obtener tags del square
if(isset($_SESSION["login"]) && isset($contentSq)){
  $tags = $t->getTagsSquare($contentSq["sq_squareid"]);
  $tagsText = "";
  if($tags){
    foreach ($tags as $key) {
      $tagsText  .= $key["tag_name"].",";
    }
  }
  $titulo = $contentSq["sq_title"];
  $desc = $contentSq["sq_description"];
}

?>
<script>var tagsList = <?php echo $listTags;?>;</script>
  <!-- Main Content cambiar de id #main-withoutsidebar-right si no tiene sidebar derecho-->
    <!-- <main id="main-withoutsidebar-right"> -->
    <?php if(isset($_SESSION["login"]) &&  $_SESSION["login"] === true):?>
      <main id="main">
    <?php else: ?>
      <main id="main">
    <?php endif ?>
  	  <section class="intro">
    		<h1>Crea y edita tu <span class="square">Square</span> a tu gusto</h1>
        <div>
          <p>Título: <input type="text" value="<?php echo $titulo; ?>" id="titulo-square" maxlength="25" placeholder="Dale un título a tu Square" /></p>
        </div>
        <!-- <p class="tooltip">Puedes cambiar el fondo de de tu Square</p>
        <p class="tooltip">Arrastra y Suelta Cabeceras o Parrafos al Square</p>
        <p class="tooltip">Selecciona los elementos del Square y podrás cambiar el color, tamaño y fuente</p> -->
        <div id="wrapper-square">
            <div id="dropzone">

            </div>
        </div>
        <div>
          <p>Descripcíon:</p>
          <textarea id="descripcion-square" rows="4" placeholder="Pon una breve descripción a tu Square"><?php echo $desc; ?></textarea>
        </div>
        <div>
          <p>¡Puedes insertar Tags par tu Square!</p>
          <input type="text" value="<?php echo $tagsText; ?>" class="form-control" id="tags" />
  	  </section>
    </main>
	<!-- Fin Main Content -->
  <!-- Sidebar de la derecha - comentar si no se quiere-->
  <?php
    if(isset($_SESSION["login"]) &&  $_SESSION["login"] !== true){
      // incluir el login.php que tenga siempre el mismo codigo
      include("login.php");
    }
  ?>
