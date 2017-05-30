<aside id='sidebar-left'>
<?php
include("../controller/Usuarios.php");

$userDao = new Usuarios();
$userFollowings = null;
$userDetail = null;

if(isset($_SESSION["id"])){
    $userFollowings = $userDao->getFollowing($_SESSION["id"]);
}


if(!isset($_SESSION["login"])){
    include("login.php");
}else{ ?>
    <h3>Seguidos</h3>
            <ul>
                <?php
                foreach($userFollowings as $val){?>
                <?php
                    $userDetail = $userDao->getUser($val['usr_id_following']);
                    echo "<li><a href='user.php?usr_id=".$userDetail["usr_id"]."'>".$userDetail["usr_usuario"]."<div class='imgcontainer'><img src=".$userDetail["usr_avatar"]." alt='Avatar' class='avatar'></div></a></li>";
                }    
                ?>
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
