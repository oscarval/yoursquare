<aside id='sidebar-left'>
<?php
if(!isset($_SESSION["login"])){
    include("login.php");
}else{ ?>
    <h3>Seguidos</h3>
            <ul>
                <li><a href="usuario.html">xuebozhu<div class="imgcontainer"><img src="../img/img_avatar2.png" alt="Avatar" class="avatar"></div></a></li>
                <li><a href="usuario.html">OscarVal<div class="imgcontainer"><img src="../img/img_avatar2.png" alt="Avatar" class="avatar"></div></a></li>
                <li><a href="usuario.html">music4u<div class="imgcontainer"><img src="../img/img_avatar2.png" alt="Avatar" class="avatar"></div></a></li>
                <li><a href="usuario.html">pintura95<div class="imgcontainer"><img src="../img/img_avatar2.png" alt="Avatar" class="avatar"></div></a></li>
            </ul>
<?php }
?>
<h3>Los mejores SQUARES</h3>
            <ul>
                <li><a href='index_guest.html?tema=Poesia'>Poesia</a></li>
                <li><a href='index_guest.html?tema=Noticias'>Noticias</a></li>
                <li><a href='index_guest.html?tema=Música'>Música</a></li>
                <li><a href='index_guest.html?tema=Código'>Código</a></li>
                <li><a href='index_guest.html?tema=Pintura'>Pintura</a></li>
                <li><a href='index_guest.html?tema=Viaje'>Viaje</a></li>
            </ul>
        <a href='create_square_bambu.html' class='button_createSquare'>Crear Square!</a>
</aside>