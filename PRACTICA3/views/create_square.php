<?php
// página para la creación del square
include("cabecera.php");
if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
  include("SidebarLeftCreateSquare.php");
  include("content_create_square.php");
}else{
  include("indexsidebar.php");
  include("error_acceso.php");
}
include("footer.php");
?>
