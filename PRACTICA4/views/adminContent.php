<?php include ('../controller/Admin.php'); 

$admin =  new Admin();

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
						?><li><a href="user.php?id= <?php echo $value["usr_id"]; ?> "> <span class="icon">🙎 - </span> <?php echo $value["usr_usuario"]; ?></a></li><?php 
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


