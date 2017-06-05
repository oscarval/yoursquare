<?php
include_once("MySQLFunctions.php");

class AvatarDao{

    private $dao;

    function __construct(){
    $this->dao = new MySQLFunctions();
    }

    public function UpdateAvatar($path, $usr_id){
        $query = "update usuarios set usr_avatar ='.." . trim($path, " \n.") . "'";
        $where = "usr_id=".$usr_id;
        $this->dao->update($query, $where);
        $result = $this->dao->getResponse();
        if($result['status']){
            return true;
        }
        else{
            return false;
        }
    }

    public function getAvatar($usr_id){
        $this->dao->select("select usr_avatar from usuarios","usr_id=$usr_id");    
        $result = $this->dao->getResponse();
        if($result["status"] && count($result["data"]) > 0){
            return $result["data"][0];
        }else{
            return false;
        }
    }

    public function setDefaultAvatar($usr_id){

    }

  
}

?>
