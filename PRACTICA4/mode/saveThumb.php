<?php
$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $_REQUEST["image"]));
file_put_contents('../img/squaresthumb/thumb_square_'.$_REQUEST["image"].'.png', $data);
?>
