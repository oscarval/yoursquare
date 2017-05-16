<?php
include("../mode/AdminDao.php");
class Admin{
    private $loginStatus;
    function __construct() {
    }

    public function getListUsers(){
      $admin = new AdminDao();
      $listUsers = $admin->getListusers();
      if ($listUsers)
        return $listUsers;
      else
        return false;
    }

    public function deleteUser($id){
      $admin = new AdminDao();
      $result = $admin->deleteUser($id);

      if($result['status'] == 'ok')
        return true;
      else
        return false;

    }

    public function deleteSquare($id){

      $admin = new AdminDao();
      $result = $admin->deleteSquare($id);

      if($result['status'] == 'ok')
        return true;
      else
        return false;

    }
}

?>
