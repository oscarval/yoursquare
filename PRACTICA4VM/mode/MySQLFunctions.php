<?php
/* CLASE PARA LA INTERACCIÓN DE LA BASE DE DATOS*/
class   MySQLFunctions{
  private $conn;
  private $response;
  private $array_ini;
  function __construct(){
    $this->array_ini = parse_ini_file("config.ini");
    $this->openBD();
  }
  public function getResponse(){
    return $this->response;
  }

  // realizar una query select en la base de datos
  public function select($query,$where,$extras=null){
    if($query){
      $query = strtolower($query);
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
      $this->conn->query("SET SESSION sql_mode = ''");
      $qResp = $this->conn->query($q) or die("erro sql".$this->conn->error);
      while($result = $qResp->fetch_assoc()){
        //  $this->response["data"] = array_merge($this->response["data"],$result);
        array_push($this->response["data"],$result);
      }
      $this->response["status"] = true;
      $this->closeBD();
    }
  }

  // realizar una query insert en la base de datos
  public function insert($table,$data){
    if($table && $data){
      $table = strtolower($table);
      $this->openBD();
      $q = "insert into ".$table;
      $fields = "(";
      $values = " VALUES(";
      foreach($data as $key => $val){
        $fields .= $key;
        $values .= "'".$val."'";
        if ($val != end($data)) {
          $fields .= ",";
          $values .= ",";
        }else{
          $fields .= ")";
          $values .= ")";
        }
      }
      $q .= $fields.$values;
      $this->response["status"] = false;
      $qResp = $this->conn->query($q) or die("erro sql".$this->conn->error);
      if($qResp){
        $this->response["status"] = true;
        $this->response["idinsert"] = $this->conn->insert_id;
      }
      $this->closeBD();
    }
  }

  // realizar un update de un registro en la base de datos
  public function update($query,$where){
    if($query){
      $query = strtolower($query);
      $this->openBD();
      $q = $query;
      if($where){
        $q .= " where ".$where;
      }
      $this->response["status"] = false;
      $qResp = $this->conn->query($q) or die("erro sql".$this->conn->error);
      $this->response["status"] = true;
      $this->closeBD();
    }
  }

  // realizar und elete enla base de datos
  public function delete($query,$where){
    if($query && $where){
      $query = strtolower($query);
      $this->openBD();
      $q = $query;
      if($where){
        $q .= " where ".$where;
      }
      $this->response["status"] = false;
      $qResp = $this->conn->query($q) or die("erro sql".$this->conn->error);
      $this->response["status"] = true;
      $this->closeBD();
    }
  }

  // realizar und elete enla base de datos
  public function extras($query){
    if($query){
      $query = strtolower($query);
      $this->openBD();
      $q = $query;
      $qResp = $this->conn->query($q);
      $this->closeBD();
    }
  }

  // abrimos una conexión
  private function openBD(){
    $this->conn = new mysqli($this->array_ini["SERVER"], $this->array_ini["USERNAME"], $this->array_ini["PASSWORD"], $this->array_ini["BBDD"]);
    if(!$this->conn){
      die("Error al conectar con la abse de datos");
    }
    $this->conn->set_charset("utf8");
  }
  // cerramos una conexión
  private function closeBD(){
    $this->conn->close();
  }
}

?>
