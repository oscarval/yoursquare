<aside id='sidebar-left'>
<h3 class='title-sidebar-left'>Herramientas</h3>
<button class='guardar' onclick='javascript:location.href="create_square_guardar.html"'>Guardar Square</button>
<ul id='herramientas'>
        <li>
          <p class='seccion_h'>Fondos</p>
<ul>
            <li>
              <label>Imagenes:</label>
              <select id='fondo-background-square' onchange='javascript:location.href="create_square_bosque.html"'>
                <option value='bosque.css'>Bosque</option>
                <option value='bambu.css' selected>Bambu</option>
                <option value='montanas.css'>Montañas</option>
                <option value='mar.css'>Mar</option>
              </select>
            </li>
         <li>
              <label>Color:</label>
              <input type='color' id='fondo-color' value='#3760AF'>

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
          <p class='seccion_h'>Cabeceras</p>
          <ul>
            <li>
              <label>Tamaños:</label>
              <select id='cabecera-size-text'>
                <option value='header1' class='header1'>Cabecera 1</option>
                <option value='header2' class='header2'>Cabecera 2</option>
                <option value='header3' class='header3'>Cabecera 3</option>
                <option value='header4' class='header4'>Cabecera 4</option>
              </select>
            </li>
          </ul>
        </li>
<li>
          <p class='seccion_h'>Fuentes</p>
          <ul>
            <li>
              <label>Familias:</label>
              <select id='fuente-font-text'>
                <option value='fuente1' class='fuente1'>Arial</option>
                <option value='fuente2' class='fuente2'>Times Roman</option>
                <option value='fuente3' class='fuente3'>Comic Sans MS</option>
                <option value='fuente4' class='fuente4'>Calibri</option>
              </select>

            </li>
            <li>
              <label>Tamaño:</label>
              <input type='range' id='size' value='12' min='12' max='20' step='1' />
              <button class='fuente-reset-size'>Reset</button>
            </li>
          </ul>
        </li>
<li>
          <p class='seccion_h'>Texto</p>
          <label>Inserta el texto de tu <span class='square'>Square</span>:</label>
          <textarea id='texto-text' rows='4'>Nuevo texto insertado por parte del usuario</textarea>
          <button class='texto-insert-text' onclick='javascript:location.href="create_square_bambu_insertar.html"'>Insertar</button>
        </li>
</ul>
    </aside>
