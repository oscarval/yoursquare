<?php
// página para la creación del square
include("cabecera.php");
echo '<link href="../css/style_AV.css" rel="stylesheet" type="text/css" />';
if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
  include("SidebarLeftCreateSquare.php");
  include("content_create_square.php");
}else{
  include("indexsidebar.php");
  include("error_acceso.php");
}
include("footer.php");
?>
