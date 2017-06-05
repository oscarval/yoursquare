<?php
include_once("../mode/AvatarDao.php");

class Avatar{

    private $dao;

    function __construct(){
    $this->dao = new AvatarDao();
    }

    public function UpdateAvatar($pathOrigin, $pathDestination, $usr_id){
        
        if (copy($pathOrigin, $pathDestination)) {
            return $this->dao->updateAvatar($pathDestination, $usr_id);
        }
        return false;
    }

    public function getAvatar($usr_id){
        return $this->dao->getAvatar($usr_id);    
    }

    public function setDefaultAvatar($usr_id){

    }

  
}

?>
