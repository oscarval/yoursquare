<?php 
echo "hola";
if (isset($_POST['submit'])) {
    echo "hola";
    $name = $_FILES['avatar']['name'];
    $pathDestination = '../img/avatar/'.$name;
    $pathOrigin = $_FILES['avatar']['tmp_name'];
    /*if (isset($name)){
        $Avatar->updateAvatar($pathOrigin,$pathDestination, $_GET["usr_id"]);       
    }
    else
        echo "mal";*/
}

?>