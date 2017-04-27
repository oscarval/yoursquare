<? php
echo " <main id='main-withoutsidebar-right'>
    <!-- <main id='main'> -->
	  <section class='center-user'>
		<h1>DominikF</h1>
    <span> Ordenar por: </span>
<select>
  <option value='Mas actual'>Mas actual</option>
  <option value='Mas antiguo'>Mas antiguo</option>
    <option value='Mas likes'>Mas Likes</option>
  <option value='Mas Dislikes'>Mas Dislikes</option>
</select>
<div id='square-list'>";
#esto deberia de ser la funcion listasquares.php
for($i = 0; $i < 10;$++){
    echo"<div class='user-square-preview'>
            <a href='square_detail.html'><div class='square'>
                <p> square placeholder</p>
            </div></a>
            <h4>Titulo del square</h4>
            <div class='like-dislike-container'>
                <img src='img/like-flat.png' alt='Like' title='Mensaje'/> <span class='like'>43</span>
                <img src='img/like-flat.png' alt='Like' title='Mensaje'/> <span class='dislike'>13</span>
            </div>
        </div>
";
}

echo "</div>
		  </section>
    </main>";
>