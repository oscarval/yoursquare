<?php
include('../controller/Squares.php');

$dao = new Squares();

if(isset($_GET["usr_id"])){
    $result = $dao->getUserNameFromSquare($_GET["usr_id"]);
    $fecha = explode(" ", $result['usr_registration_date']);
}

?>
<aside id='sidebar-left'>
    <h3><?php echo $result['usr_usuario']?></h3>
    <h4>Miembro desde:</h4>
    <span> <?php echo $fecha[0]?> </span>
    <h4>Suma de like totales:</h4>
    <span class='like'>230</span>
    <span class='dislike'></span><!-- Si la puntuación fuese negativa se pondria en rojo -->
    <h4>Intereses:</h4>
    <span>Informatica, Artes Marciales, Videojuegos...</span>
    <h4>País:</h4>
    <span><?php echo $result['usr_pais']?></span>
</aside>
