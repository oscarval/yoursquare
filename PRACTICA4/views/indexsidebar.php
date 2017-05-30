<?php
include_once("../controller/Tags.php");
$sq = new Tags();
$tags = $sq->getTagsCloud(10);
$listTags = json_encode($tags);
?>
<aside id='sidebar-left'>
  <?php
  include("../controller/Usuarios.php");

  $userDao = new Usuarios();
  $userFollowings = null;
  $userDetail = null;

  if(isset($_SESSION["id"])){
    $userFollowings = $userDao->getFollowing($_SESSION["id"]);
  }


  if(!isset($_SESSION["login"])){
    include("login.php");
  }else{ ?>
    <h3>Seguidos</h3>
    <ul>
      <?php
      foreach($userFollowings as $val){?>
        <?php
        $userDetail = $userDao->getUser($val['usr_id_following']);
        echo "<li><a href='user.php?usr_id=".$userDetail["usr_id"]."'>".$userDetail["usr_usuario"]."<div class='imgcontainer'><img src=".$userDetail["usr_avatar"]." alt='Avatar' class='avatar'></div></a></li>";
      }
      ?>
    </ul>
    <?php }
    ?>
    <h3>Los mejores SQUARES</h3>
    <div id="tags_container"></div>
    <a href='create_square.php' class='button_createSquare'>Crear Square!</a>
  </aside>
  <script type="text/javascript">

  /*!
  * Create an array of word objects, each representing a word in the cloud
  */
  // var word_array = [
  //     {text: "Lorem", weight: 15},
  //     {text: "Ipsum", weight: 9, link: "http://jquery.com/"},
  //     {text: "Dolor", weight: 6, html: {title: "I can haz any html attribute"}},
  //     {text: "Sit", weight: 7},
  //     {text: "Amet", weight: 5}
  //     // ...as many words as you want
  // ];
  var word_array= <?php echo $listTags; ?>;

  $(function() {
    // When DOM is ready, select the container element and call the jQCloud method, passing the array of words as the first argument.
    $("#tags_container").jQCloud(word_array);
  });
  </script>
