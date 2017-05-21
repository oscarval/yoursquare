<?php
include("MySQLFunctions.php");

class SearchDao{
    private $dao;

    function __construct(){
    }

    function userSearch($keyword,$start,$end){

        $functions = new MySQLFunctions();
        //echo "select usr_usuario from usuarios" . 'usr_usuario like %' . $keyword . '%' . "";
        $sql=$functions->select("select * from usuarios","usr_usuario like '%". $keyword . "%'","");
        $resp = $functions->getResponse();

        if($resp["status"] && count($resp["data"]) > 0){
          return $resp["data"];
        }else{
          return false;
        }
    }
    
    function squareSearch($keyword,$start,$end){

        $functions = new MySQLFunctions();
        //echo "select usr_usuario from usuarios" . 'usr_usuario like %' . $keyword . '%' . "";
        $sql=$functions->select("select * from square","sq_title like '%". $keyword . "%'","");
        $resp = $functions->getResponse();
        
        if($resp["status"] && count($resp["data"]) > 0){
          return $resp["data"];
        }else{
          return false;
        }
    }

}


?>