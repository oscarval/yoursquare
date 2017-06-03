<aside id='sidebar-left'>
  <h3 class='title-sidebar-left'>Herramientas</h3>
  <?php if(isset($_SESSION["login"]) &&  $_SESSION["login"] === true): ?>
    <button class='guardar' onclick="SaveSquare('<?php echo $_SESSION["id"]; ?>','<?php echo $_SESSION["sq_squareid"]; ?>');">Guardar Square</button>
  <?php else : ?>
    <button class='guardar' onclick="SaveSquareSession('<?php echo $_SESSION["sq_squareid"]; ?>');">Guardar Square</button>
  <?php endif ?>

  <ul id='herramientas'>
    <li>
      <div class='seccion_h header-collapse arrowDown'>Fondos</div>
      <div class="items" style="display:none;">
        <div>Imágenes</div>
        <select id='fondo-background-square'>
          <option value='' selected>--ninguno--</option>
          <option value='amor'>Amor</option>
          <option value='flores'>Flores</option>
          <option value='futbol'>Futbol</option>
          <option value='bosque'>Bosque</option>
          <option value='bambu' >Bambu</option>
          <option value='montanas'>Montañas</option>
          <option value='musica'>Música</option>
          <option value='mar'>Mar</option>
          <option value='papiro'>Papiro</option>
        </select>
      </div>
    </li>
    <li>
      <div class='seccion_h header-collapse arrowDown'>Cabeceras</div>
      <div id="items" class="items" style="display:none;">
        <h1>Header 1</h1>
        <h2>Header 2</h2>
        <h3>Header 3</h3>
        <h4>Header 4</h4>
        <h5>Header 5</h5>
        <h6>Header 6</h6>
      </div>
    </li>
    <li>
      <div class='seccion_h header-collapse arrowDown'>Parrafos</div>
      <div id="items-p" class="items" style="display:none;">
        <p>Parrafo</p>
        <p style="font-style:italic;">Parrafo Cursiva</p>
        <p style="font-weight:bold;">Parrafo Negrita</p>
      </div>
    </li>
    <li>
      <div class='seccion_h header-collapse arrowDown'>Fuentes</div>
      <div class="items" style="display:none;">
        <ul>
          <li>
            <label>Color:</label>
            <input id="color-style" type='color' id='fondo-color' value="#ffffff">

          </li>
          <li>
            <label>Familias:</label>
            <select id='fuente-font-text'>
              <option value='Arial' class='fuente1'>Arial</option>
              <option value='Times Roman' class='fuente2'>Times Roman</option>
              <option value='Comic Sans MS' class='fuente3'>Comic Sans MS</option>
              <option value='Calibri' class='fuente4'>Calibri</option>
            </select>

          </li>
          <li>
            <label>Tamaño:</label>
            <input id="range-size" type='range' id='size' value='16' min='16' max='25' step='1' />
          </li>
        </ul>
      </div>
    </li>
    <li>
      <button id="resetTools" class='resetTools'>Reiniciar Herramientas</button>
    </li>
  </ul>
</aside>
