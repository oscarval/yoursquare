<?php 
    include("cabecera.php");
    echo "<link href='css/style-user.css' rel='stylesheet' type='text/css' />";
    echo "<link href='css/style_XBZ.css' rel='stylesheet' type='text/css' />";
    include("indexsidebar.php");
?>
    
    <!-- <main id="main-withoutsidebar-right"> -->
    <main id="main">
  	  <section class="intro">
    		<div class="imgcontainer_detail"><a href="user.php"><img src="../img/img_avatar2.png" alt="Avatar" class="avatar_detail"><span id="nombrePerfil_detail">xuebozhu</span></a><span id="fechaPerfil">4 de Marzo de 2017</span></div>
        <div id="wrapper-square" class="bambu">
          <div class="content-background-square">
            <div class="content-intro-square">
                <h1>Título de tu Square</h1>
                <p>Contenido de tu Square</p>
                <p>Puede meter varias líneas</p>
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
        <div id="comments-box">
            <a href="usuario.html"><img src="../img/img_avatar2.png" alt="Avatar" class="avatar_comment"><span class="nombrePerfil_comment">oscarval</span></a>
            <p class="comment-user">Me encanta este square!! Aqu� tienes mi like!!</p>
            <a href="usuario.html"><img src="../img/img_avatar2.png" alt="Avatar" class="avatar_comment"><span class="nombrePerfil_comment">xuebozhu</span></a>
            <p class="comment-user">Gracias por tu like! Un saludo!</p>
        </div>
      </div>
    </main>
	<!-- Fin Main Content -->

<?php include("footer.php"); ?>

