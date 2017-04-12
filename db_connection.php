<?php 


class dbConnection {

  private static $instance = null;
  private $connection;
  
  private $host = 'localhost';
  private $user = 'root';
  private $pass = '';
  private $db = 'university';
  private $table_name = null;
   
  private function __construct()
  {
    @$this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db);
    if ($this->connection->connect_error) {
      //echo $this->connection->error;
      throw new Exception($this->connection->connect_error);
      die();
    }
  }
  
  public static function getInstance()
  {
    if(!self::$instance)
    {
      self::$instance = new dbConnection();
    }
   
    return self::$instance;
  }
  
  public function getConnection()
  {
    return $this->connection;
  }

  public function getDbName()
  {
    return $this->db;
  }

  private function isTableExist($table_name)
  {

    $query = $this->connection->query("SHOW TABLES IN $this->db");
    if (!$query){
      return false;
    }
    else{
      $rows = [];
      while($row = $query->fetch_assoc()){
        $rows []= $row;
      }
      $tables = [];
      for ($i=0, $count = count($rows); $i < $count; $i++){
        $tables []= $rows[$i]['Tables_in_' . $this->db];
      }
    }
    if (in_array($table_name, $tables)){
      return true;
    }
    else{
      return false;
    }
  }


  public function setTableName($table_name)
  {

    if($this->isTableExist($table_name)){
      $this->table_name = $table_name;
    }
    else{
      $this->table_name = null;
    }
  }

  public function getTableName(){
    return $this->table_name;
  }

  public function getTableColumnsNames(){

    $query = $this->connection->query("SHOW columns FROM " . $this->getDbName() ."." . $this->getTableName());

    if (!$query){
      return false;
    }
    else{
      $rows = [];
      while($row = $query->fetch_assoc()){
        $rows []= $row;
      }

      $columns =[];
      for ($i=0, $count=count($rows); $i < $count; $i++){
        $columns []= $rows[$i]['Field'];
      }
      if (empty($columns)){
        return false;
      }
      else{
        return $columns;
      }
    }
  }

  private function buildTableHead()
  {
    $table_columns = $this->getTableColumnsNames();
    if(!empty($table_columns)){
      $table_head = "<tr> ";
      for ($i=0, $count=count($table_columns); $i<$count; $i++){
          $table_head .= "<th>$table_columns[$i]</th> ";
      }
      $table_head .= "</tr>";
      return $table_head;
    }
    else{
      return false;
    }
  }

  public function buildTable()
  {

    self::buildTableHead();
    self::buildTableBody();

    return false;

  }

}