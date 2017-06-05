<?php
include_once("../mode/SquaresDao.php");
class Squares{
    private $dao;

    function __construct(){
      $this->dao = new SquaresDao();
    }
    // buscar squares mediante el sessioid del php
    public function getSquaresSessionId($sessionId){
       return $this->dao->getSquaresSessionId($sessionId);
    }
    // buscar squares mediante el sessioid del php
    public function getSquaresPendiente($userid){
       return $this->dao->getSquaresPendiente($userid);
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

    //Obtiene resultado de busqueda de squares y users

    public function userSearch($keyword,$start,$end){
      return $this->dao->userSearch($keyword,$start,$end);
    }
    public function squareSearch($keyword,$start,$end){
      return $this->dao->squareSearch($keyword,$start,$end);
    }

    public function generalSearch($keyword){
        $result['squares'] = $this->dao->squareSearch($keyword,0,0);
        $result['users'] =  $this->dao->userSearch($keyword,0,0);
        return $result;
    }

    public function deleteSquare($sq_squareid){
        return $this->dao->deleteSquare($sq_squareid);
    }

    // Obtener los últimos Squares
    public function getLastSquares(){
        return $this->dao->getLastSquares();
    }

    // Obtner los Squares con mas dislikes
    public function getMoreDislikes(){
        return $this->dao->getMoreDislikes();
    }

    // Obtener los Squares con mas likes
    public function getMoreLikes(){
        return $this->dao->getMoreLikes();
    }
}

?>
