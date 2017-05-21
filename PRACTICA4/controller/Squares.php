<?php
include("../mode/SquaresDao.php");
class Squares{
    private $dao;

    function __construct(){
      $this->dao = new SquaresDao();
    }
    // obtener los squares de invitado
    public function getSquaresGuest($limit){
       return $this->dao->getSquares("Guest",$limit);
    }
    // obtener los squares de usuario login
    public function getSquaresUser($limit){
       return $this->dao->getSquares("User",$limit);
    }
    // obtener los squares de usuario login
    public function getSquaresAdmin($limit){
       return $this->dao->getSquares("Admin",$limit);
    }
    // obtener los squares de usuario login
    public function getSquaresUserLogin($userid,$limit){
       return $this->dao->getSquaresUserLogin($userid,$limit);
    }
    // obtenemos el square por su id
    public function getSquareDetail($id){
      return $this->dao->getSquareDetail($id);
    }
    // insertamos un square
    public function createSquare($dataSquare){
      return $this->dao->insertSquare($dataSquare);
    }
    // actualizamos el square por su id
    public function updateSquareDetails($id,$dataUpdate){
      return $this->dao->updateSquare($id,$dataUpdate);
    }

}

?>
