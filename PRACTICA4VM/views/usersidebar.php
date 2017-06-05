<link href="https://fonts.googleapis.com/css?family=Monoton|PT+Sans" rel="stylesheet">    
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/style-user.css" rel="stylesheet" type="text/css" />
<?php
include('../controller/Squares.php');
include_once('../controller/Avatar.php');
include('../controller/Usuarios.php');

$dao = new Squares();
$Avatar = new  Avatar();
$daoUser = new Usuarios();

if(isset($_GET["usr_id"])){
    $id = $_GET["usr_id"];
    $result = $daoUser->getUser($_GET["usr_id"]);
    $fecha = explode(" ", $result['usr_registration_date']);
}

?>

<aside id='sidebar-left'>
<?php
    if(isset($_POST['submit'])){
        $name = $_FILES['avatar']['name'];
        $pathDestination = '../img/avatar/'.$name;
        $pathOrigin = $_FILES['avatar']['tmp_name'];
        if(isset($_FILES['avatar']) && (($_FILES["avatar"]["type"] == "image/png") || ($_FILES["avatar"]["type"] == "image/jpg") || ($_FILES["avatar"]["type"] == "image/jpeg"))    ){
            if (isset($name)){
                $Avatar->updateAvatar($pathOrigin,$pathDestination, $_GET["usr_id"]);
                header("Location: user.php?usr_id=$id");     
            }
        }
        else
            echo "<p>Solo se permiten imágenes</p>";
    }

    $pathAvatar = $Avatar->getAvatar($_GET["usr_id"])['usr_avatar']; 

    echo "<p><img src='".$pathAvatar."'/></p>";
    if ( (isset($_SESSION['login']) && (isset($_SESSION['id']) && $_SESSION['id'] == $_GET["usr_id"]) || (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] ))){
    ?>
        <p>
            <form id="change_avatar" method="post" action="" enctype="multipart/form-data">
                <label for="file-upload" class="custom-file-upload">
                    <i class="fa fa-cloud-upload"></i> Selecciona imagen
                </label>
                <input id="file-upload" type="file" name="avatar"  accept="image/*"/>
                <input type="submit" value="Upload" name="submit" class="custom-file-upload">
            </form>
        </p> 
    <?php
    }
    ?>

    

    <h2><?php echo $result['usr_usuario']?></h2>
    <h4>Miembro desde:</h4>
    <span> <?php echo $fecha[0]?> </span>
    <h4>Suma de like totales:</h4>
    <?php
    $likes = $daoUser->getUserLikesDislikes($id);
    if($likes >= 0){
        echo "<span class='like'>".$likes."</span>";
    }else{
        echo "<span class='dislike'>".$likes."</span>";
    }
    ?>
    <h4>Intereses:</h4>
    <span>Informatica, Artes Marciales, Videojuegos...</span>
    <h4>País:</h4>
    <span><?php echo $result['usr_pais']?></span>
</aside>
