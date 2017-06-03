<?php
include_once("../controller/Squares.php");
$sq = new Squares();
$lastSquares = $sq->getLastSquares();
$dislikesSquares = $sq->getMoreDislikes();
$likesSquares = $sq->getMoreLikes();
$html = "<li><a href='square_detail.php?id=%s'>%s</a></li>";

?>
<!-- sidebar izquierdo -->
    <aside id="sidebar-left">
     <p>Squares recientes</p>
     <ul>
      <?php
        foreach($lastSquares as $val){
          echo sprintf($html,$val["sq_squareid"],substr($val["sq_title"],0,20).".");
        }
      ?>
     </ul>
     <p>Squares menos valorados</p>
     <ul>
      <?php
        $html = "<li><a href='square_detail.php?id=%s'>%s</a></li>";
        foreach($dislikesSquares as $val1){
          echo sprintf($html,$val1["sq_squareid"],substr($val1["sq_title"],0,20).".");
        }
      ?>
     </ul>
     <p>Squares más valorados</p>
     <ul>
      <?php
        $html = "<li><a href='square_detail.php?id=%s'>%s</a></li>";
        foreach($likesSquares as $val2){
          echo sprintf($html,$val2["sq_squareid"],substr($val2["sq_title"],0,20).".");
        }
      ?>
     </ul>
     </aside>
