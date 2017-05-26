<aside id='sidebar-left'>
  <h3 class='title-sidebar-left'>Herramientas</h3>
  <button class='guardar' onclick='javascript:location.href="create_square_guardar.html"'>Guardar Square</button>
  <ul id='herramientas'>
    <li>
      <p class='seccion_h'>Fondos</p>
      <ul>
        <li>
          <label>Imagenes:</label>
          <select id='fondo-background-square'>
            <option value='' selected>--ninguno--</option>
            <option value='bosque'>Bosque</option>
            <option value='bambu' >Bambu</option>
            <option value='montanas'>Montañas</option>
            <option value='mar'>Mar</option>
          </select>
        </li>
        <li>
          <label>Color:</label>
          <input id="color-style" type='color' id='fondo-color' value="#ffffff">

        </li>
        <li>
          <label>Bordes:</label>
          <select id='fondo-borde-square' onchange='javascript:location.href="create_square_bambu_punteado.html"'>
            <option value='redondeado' selected class='redondeado'>Redondeado</option>
            <option value='lineal' class='lineal'>Lineal</option>
            <option value='punteado' class='punteado'>Punteado</option>
            <option value='sinborde' class='sinborde'>Sin Borde</option>
          </select>

        </li>
      </ul>
    </li>
    <li>
      <div class='seccion_h header-collapse'>Cabeceras<span class="collapse-hide">&#8595;</span></div>
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
      <div class='seccion_h header-collapse'>Parrafos<span class="collapse-hide">&#8595;</span></div>
      <div id="items-p" class="items" style="display:none;">
        <p>Parrafo</p>
      </div>
    </li>
    <li>
      <p class='seccion_h'>Fuentes</p>
      <ul>
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
    </li>
    <li>
      <button id="resetTools" class='resetTools'>Reiniciar Herramientas</button>
    </li>
  </ul>
</aside>
