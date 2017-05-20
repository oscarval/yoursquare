	<!-- Main Content cambiar de id #main-withoutsidebar-right si no tiene sidebar derecho-->
    <!-- <main id="main-withoutsidebar-right"> -->
    <?php if($_SESSION["login"] === true):?>
      <main id="main-withoutsidebar-right">
    <?php else: ?>
      <main id="main">
    <?php endif ?>
  	  <section class="intro">
    		<h1>Crea y edita tu <span class="square">Square</span> a tu gusto</h1>
        <p class="tooltip">Selecciona Fondo->Imágenes->Bosque para ver el cambio del background</p>
        <p class="tooltip">Presiona el botón Insertar de la izquierda para ver el texto en tu Square </p>
        <div class="tooltip">Selecciona Fondo->Borde->Punteado para cambiar le borde de tu Square </div>
        <div id="wrapper-square">
            <div id="dropzone">

            </div>
        </div>
  	  </section>
    </main>
	<!-- Fin Main Content -->
  <!-- Sidebar de la derecha - comentar si no se quiere-->
  <?php
    if($_SESSION["login"] !== true){
      // incluir el login.php que tenga siempre el mismo codigo
      include("login.php");
    }
  ?>
