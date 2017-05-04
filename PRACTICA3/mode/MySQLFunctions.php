<?php
/* CLASE PARA LA INTERACCIÓN DE LA BASE DE DATOS*/
class MySQLFunctions{
  private $conn;
  public $response;
  private $array_ini;
  function __construct(){
    $this->array_ini = parse_ini_file("config.ini");
    $this->response = [];
    $this->openBD();
  }
  // realizar una query select en la base de datos
  public function select($query,$where,$extras=null){
    if($query){
      $this->openBD();
      $q = $query;
      if($where){
        $q .= " where ".$where;
      }
      if($extras){
        $q .= " ".$extras;
      }
      $this->response["status"] = false;
      $this->response["data"] = [];
      $qResp = $this->conn->query($q);
      while($result = $qResp->fetch_assoc()){
         array_push($this->response["data"],$result);
      }
      $this->response["status"] = true;
      $this->closeBD();
    }
  }

  // realizar una query insert en la base de datos
  public function insert($table,$data){
    if($table && $data){
      $this->openBD();
      $q = "insert into ".$table;
      $fields = "(";
      $values = " VALUES(";
      foreach($data as $key => $val){
        $fields .= $key;
        $values .= "'".$val."'";
        if ($key != end($fields)) {
          $fields .= ",";
          $values .= ",";
        }else{
          $fields .= ")";
          $values .= ")";
        }
      }
      $q .= $fields.$values;
      $this->response = ["status"=>false];
      $qResp = $this->conn->query($q);
      if($qResp){
        $this->response = ["status"=>"ok"];
      }
      $this->closeBD();
    }
  }

  // realizar un update de un registro en la base de datos
  public function update($query,$where){
    if($query){
      $this->openBD();
      $q = $query;
      if($where){
        $q .= " where ".$where;
      }
      $this->response = ["status"=>false];
      $qResp = $this->conn->query($q);
      $this->response = ["status"=>"ok"];
      $this->closeBD();
    }
  }

  // realizar und elete enla base de datos
  public function delete($query,$where){
    if($query && $where){
      $this->openBD();
      $q = $query;
      if($where){
        $q .= " where ".$where;
      }
      $this->response = ["status"=>false];
      $qResp = $this->conn->query($q);
      $this->response = ["status"=>"ok"];
      $this->closeBD();
    }
  }

  // abrimos una conexión
  private function openBD(){
    $this->conn = new mysqli($this->array_ini["SERVER"], $this->array_ini["USERNAME"], $this->array_ini["PASSWORD"], $this->array_ini["BBDD"]);
    if(!$this->conn){
      die("Error al conectar con la abse de datos");
    }
  }
  // cerramos una conexión
  private function closeBD(){
    $this->conn->close();
  }
}

?>
