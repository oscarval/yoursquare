<?php
include_once("MySQLFunctions.php");
class SquaresDao{
  private $dao;

  function __construct(){
    $this->dao = new MySQLFunctions();
  }
  /* obtenemos los squares que tengan el sessionid del php
  ** @userid id de usuraio
  */
  public function getSquaresPendiente($userid){
    $this->dao->select("select * from square","sq_userid='".$userid."' and sq_title is null or sq_title=''");
    $resp = $this->dao->getResponse();
    if($resp["status"] && count($resp["data"]) > 0){
      return $resp["data"];
    }
    return null;
  }

  /* obtenemos los squares que tengan el sessionid del php
  ** @session sessionid
  */
  public function getSquaresSessionId($session){
    $this->dao->select("select * from square","sq_usersession='".$session."'");
    $resp = $this->dao->getResponse();
    if($resp["status"] && count($resp["data"]) > 0){
      return $resp["data"];
    }
    return null;
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
      $this->dao->select("select * from vSquare".$type,false,"limit $initLimit,$limit");
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
      $this->dao->select("select * from square",false,"where sq_squareid=$id");
      $resp = $this->dao->getResponse();
      if($resp["status"] && count($resp["data"]) > 0){
        return $resp["data"][0];
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
        return $resp["idinsert"];
      }
      return null;
  }
  /* Actualizamos el square por el id
  ** @id id del square a actualizar
  ** @dataSquare array asociativo con campos y valores propios de la base de datos
  */
  public function updateSquare($id, $dataSquare){
      if(is_array($dataSquare)){
        $q = "update square set ";
        foreach($dataSquare as $key => $val){
          $q .= $key."='".$val."'";
          if ($val != end($dataSquare)) {
            $q .= ",";
          }
        }
        $this->dao->update($q,"sq_squareid=$id");
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
		$this->dao->select("select * from square",false,"where sq_userid=$userid","limit 0,10");
    }else{
      $initLimit = ($limit/10)*10;
      $this->dao->select("select * from square","where sq_userid=$userid","limit $initLimit,$limit");
    }
    $resp = $this->dao->getResponse();
    if($resp["status"] && count($resp["data"]) > 0){
      return $resp["data"];
    }
    return null;
  }




/*Busqueda de squares y users*/
    public function userSearch($keyword,$start,$end){

        //echo "select usr_usuario from usuarios" . 'usr_usuario like %' . $keyword . '%' . "";
        $this->dao->select("select * from usuarios","usr_usuario like '%". $keyword . "%'","");
        $resp =  $this->dao->getResponse();

        if($resp["status"] && count($resp["data"]) > 0){
          return $resp["data"];
        }else{
          return false;
        }
    }

    public function squareSearch($keyword,$start,$end){

        //echo "select usr_usuario from usuarios" . 'usr_usuario like %' . $keyword . '%' . "";
        // $this->dao->select("select * from square","sq_title like '%". $keyword . "%'","");
        $this->dao->select("select * from vSquareSearch","sq_title like '%". $keyword . "%' or tag_name like '%". $keyword . "%' ","group by sq_squareid");
        $resp =  $this->dao->getResponse();

        if($resp["status"] && count($resp["data"]) > 0){
          return $resp["data"];
        }else{
          return false;
        }
    }

    public function deleteSquare($sq_squareid){
      $this->dao->delete("delete from square","sq_squareid=$sq_squareid");
      return $this->dao->getResponse();
    }

}

?>
