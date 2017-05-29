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
          <p>Título: <input type="text" id="titulo-square" maxlength="25" placeholder="Dale un título a tu Square" /></p>
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
          <textarea id="descripcion-square" rows="4" placeholder="Pon una breve descripción a tu Square" ></textarea>
        </div>
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
