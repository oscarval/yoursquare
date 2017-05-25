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
                <li><a href='index.php?tema=Poesia'>Poesia</a></li>
                <li><a href='index.php?tema=Noticias'>Noticias</a></li>
                <li><a href='index.php?tema=Música'>Música</a></li>
                <li><a href='index.php?tema=Código'>Código</a></li>
                <li><a href='index.php?tema=Pintura'>Pintura</a></li>
                <li><a href='index.php?tema=Viaje'>Viaje</a></li>
            </ul>
        <a href='create_square.php' class='button_createSquare'>Crear Square!</a>
</aside>
                 <script type="text/javascript">
         /*!
          * Create an array of word objects, each representing a word in the cloud
          */

         var word_array = [
             {text: "Lorem", weight: 15},
             {text: "Ipsum", weight: 9, link: "http://jquery.com/"},
             {text: "Dolor", weight: 6, html: {title: "I can haz any html attribute"}},
             {text: "Sit", weight: 7},
             {text: "Amet", weight: 5}
             // ...as many words as you want
         ];

$(function() {
    // When DOM is ready, select the container element and call the jQCloud method, passing the array of words as the first argument.
    $("#example").jQCloud(word_array);
});
</script>
         <div id="cloudTags" style="width: 550px; height: 350px;"></div>