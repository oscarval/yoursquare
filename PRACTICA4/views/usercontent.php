<?php
$squares = new Squares();
$squaresList = null;
if(isset($_SESSION["login"])){
  $squaresList = $squares->getSquaresUserLogin($_GET["usr_id"], 10);
  $html = "<a href='square_detail.php?id=%s'><div class='item'>%s usuario</div></a>";
}else{
  include("error_acceso.php");
}
?>
<main id='main-withoutsidebar-right'>
    <!-- <main id='main'> -->
		<section class='intro'>
			<div class='container'>
			<?php
				if($squaresList){
				  foreach($squaresList as $val){
					echo sprintf($html,$val["sq_squareid"],$val["sq_title"]);
				  }
				}else{
				  echo "<p>Sin Contenido</p>";
				}
			?>
			</div>
		</section>
</main>