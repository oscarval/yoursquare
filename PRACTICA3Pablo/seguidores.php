<?php include("controller/connect.php");
 	  $sql = "SELECT id_usuario, id_seguidor FROM seguidores";
      $result = $conn->query($sql);

      ?>  
      <h3>Seguidos</h3>
      <ul>
      <?php
      while($row = $result->fetch_assoc()) {?>
        
        <?php if ($row['id_usuario'] == $_SESSION['id']) { ?>
	        <li><a href="usuario.php"> xuebozhu <div class="imgcontainer"><img src="img/img_avatar2.png" alt="Avatar" class="avatar"></div></a></li>
 		<?php 
 		}
      }
      ?></ul> 



     