
<?php include("controller/login.php"); 

?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Proyecto Academias</title>
    <link href="views/css/style.css" rel="stylesheet" type="text/css" />
    <link href="views/css/styleXuebo_index.css" rel="stylesheet" type="text/css" />
</head>
<body>

<aside id="sidebar-left">  
            <?php include('seguidores.php') ?>
            <h3>Los mejores SQUARES</h3>
            <ul>
                <li><a href="index.html?tema=Poesia">Poesia</a></li>
                <li><a href="index.html?tema=Noticias">Noticias</a></li>
                <li><a href="index.html?tema=Música">Música</a></li>
                <li><a href="index.html?tema=Código">Código</a></li>
                <li><a href="index.html?tema=Pintura">Pintura</a></li>
                <li><a href="index.html?tema=Viaje">Viaje</a></li>
            </ul>
        <a href="create_square_bambu.html" class="button_createSquare">Crear Square!</a>
        

    </aside>
</body>


