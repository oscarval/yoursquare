<?php
/* CLASE PARA LA INTERACCIÓN DE LA BASE DE DATOS*/
class MySQLFunctions(){
  private $conn;
  private $response;
  private $array_ini;
  function __construct(){
    $this->array_ini = parse_ini_file("config.ini");
    $this->response = [];
    $this->openBD();
  }
  // realizar una query select en la base de datos
  public function select($query,$where,$extras){
    if($query){
      $this->openDB();
      $q = $query;
      if($where){
        $q .= " where ".$where;
      }
      if($extras){
        $q .= " ".$extras;
      }
      $this->response = ["status"=>false];
      $this->response["data"] = [];
      $qResp = $this->conn->mysqli_query($q);
      while($result = $this->conn->mysqli_fetch_assoc($qResp)){
         array_push($this->response["data"],$result);
      }
      $this->closeBD();
    }
  }

  // realizar una query insert en la base de datos
  public function insert($table,$data){
    if($table && $data){
      $this->openDB();
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
      $qResp = $this->conn->mysqli_query($q);
      if($qResp){
        $this->response = ["status"=>"ok"];
      }
      $this->closeBD();
    }
  }

  // realizar un update de un registro en la base de datos
  public function update($query,$where){
    if($query){
      $this->openDB();
      $q = $query;
      if($where){
        $q .= " where ".$where;
      }
      $this->response = ["status"=>false];
      $qResp = $this->conn->mysqli_query($q);
      $this->response = ["status"=>"ok"];
      $this->closeBD();
    }
  }

  // realizar und elete enla base de datos
  public function delete($query,$where){
    if($query && $where){
      $this->openDB();
      $q = $query;
      if($where){
        $q .= " where ".$where;
      }
      $this->response = ["status"=>false];
      $qResp = $this->conn->mysqli_query($q);
      $this->response = ["status"=>"ok"];
      $this->closeBD();
    }
  }

  // abrimos una conexión
  private function openBD(){
    $this->conn = new mysqli($this->array_ini["SERVER"], $this->array_ini["USERNAME"], $this->array_ini["PASSQWORD"], $this->array_ini["BBDD"]);
    if(!$this->conn){
      die("Error al conectar con la abse de datos");
    }
  }
  // cerramos una conexión
  private function closeBD(){
    $this->conn->mysqli_close();
  }
}

?>
