<?php
include("MySQLFunctions.php");
class SquaresDao{
  private $dao;

  function __construct(){
    $this->dao = new MySQLFunctions();
  }
  /* obtenemos los squares según el tipo
  ** @type Guest, User or Admin
  ** @limit int numero de registro a pedir
  */
  public function getSquares($type,$limit){
    if($limit <= 10){
      $this->dao->select("select * from vSquare".$type,false,"limit 0,10");
    }else{
      $initLimit = ($limit/10)*10;
      $sql->select("select * from vSquare".$type,false,"limit $initLimit,$limit");
    }
    $resp = $this->dao->getResponse();
    if($resp["status"] && count($resp["data"]) > 0){
      return $resp["data"];
    }
    return null;
  }
  /* Obtenemos el square por el id
  ** @id int id del square para obtener sus detalles
  */
  public function getSquareDetail($id){
      $this->dao->select("select * from vSquareDetails","where sq_squareid=$id");
      $resp = $this->dao->getResponse();
      if($resp["status"] && count($resp["data"]) > 0){
        return $resp["data"];
      }
      return null;
  }

  /* Insertamos el square
  ** @dataSquare object json con campos y valores propios de la base de datos
  */
  public function insertSquare($dataSquare){
      $this->dao->insert("Square",$dataSquare);
      $resp = $this->dao->getResponse();
      if($resp["status"]){
        return true;
      }
      return null;
  }
  /* Actualizamos el square por el id
  ** @id id del square a actualizar
  ** @dataSquare array asociativo con campos y valores propios de la base de datos
  */
  public function updateSquare($id, $dataSquare){
      if(is_array($dataSquare)){
        $q = "update ".$table." set ";
        foreach($dataSquare as $key => $val){
          $q .= $key."='".$val."'";
          if ($val != end($data)) {
            $q .= ",";
          }
        }
        $this->dao->update($q,"where sq_squareid=$id");
        $resp = $this->dao->getResponse();
        if($resp["status"]){
          return true;
        }
      }
      return null;
  }
  /* Obtenemos los squares del usuario conectado
  ** @id id del square a actualizar
  ** @dataSquare array asociativo con campos y valores propios de la base de datos
  */
  public function getSquaresUserLogin($userid,$limit){
    if($limit <= 10){
    $this->dao->select("select * from Squares","where sq_userid=$userid","limit 0,$limit");
    }else{
      $initLimit = ($limit/10)*10;
      $sql->select("select * from Squares","where sq_userid=$userid","limit $initLimit,$limit");
    }
    $resp = $this->dao->getResponse();
    if($resp["status"] && count($resp["data"]) > 0){
      return $resp["data"];
    }
  }



}

?>
