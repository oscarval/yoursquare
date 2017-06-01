<?php

include('../mode/FollowDao.php');

class Follow{
    private $dao;

    function __construct(){
      $this->dao = new FollowDao();
    }
    
    public function insertFollow($idUser, $idUserFollowing){
       return $this->dao->insertFollow($idUser, $idUserFollowing);
    }
    
    public function deleteFollow($idUser, $idUserFollowing){
        return $this->dao->deleteFollow($idUser, $idUserFollowing);
    }
    
    public function isFollowed($idUser, $idUserFollowing){
        return $this->dao->isFollowed($idUser, $idUserFollowing);
    }
}

?>