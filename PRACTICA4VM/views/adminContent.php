<?php include ('../controller/Admin.php'); 
//include ('../controller/Avatar.php');

$admin =  new Admin();
$Avatar = new Avatar();

$var = $admin->getListUsers();

if ($var != false){ 
	?>
	<main id="main-withoutsidebar-right">
		<section class="intro">
		<h1>Lista de Usuarios</h1>
			<div id="listas_usuarios">
				<ul>
					<?php
					foreach ($var as $value) {
						$pathAvatar = $Avatar->getAvatar($value['usr_id'])['usr_avatar']; 
						?><li><a href="user.php?usr_id=<?php echo $value["usr_id"]; ?> "> <img class='icon' src='<?php echo $pathAvatar ?>'></img> - <?php echo $value["usr_usuario"]; ?></a></li><?php 
					}
					?> 
				</ul>
			</div>
	  	</section>
    </main> 
	<?php
}
else{
	?> <h3>Lista de Usuarios</h3>
<?php }


