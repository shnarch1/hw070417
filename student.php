<?php 

include 'person.php';
include 'db_connection.php';

class Student extends Person
{
	private static $table_name = 'students';
	private $db_instance;
	private $mysqli;
	
	function __construct($_id=null, $name=null, $last_name=null, $ssn=null, $email=null)
	{
		parent::__construct($_id, $name, $last_name, $ssn, $email);
		$this->db_instance = dbConnection::getInstance();
		$this->mysqli = $this->db_instance->getConnection();
	}


	public function update(){

		$query = $this->mysqli->query("UPDATE " . $this->db_instance->getDbName() . "." . self::$table_name . " SET name='$this->name', last_name='$this->last_name', ssn='$this->ssn', email='$this->email' WHERE id=$this->_id");
		if (!$query){
			return false;
		}
		else{
			return true;
		}
	}

	public function loadById($_id){

		$query = $this->mysqli->query("SELECT * FROM " . $this->db_instance->getDbName() . "." . self::$table_name .  " where id=$_id");

		if($query){
			$rows = [];
      		while($row = $query->fetch_assoc()){
        		$rows []= $row;
      		}

      		if (empty($rows)) {
      			return false;
      		}

      		$this->setId($rows[0]['id']);
      		$this->setName($rows[0]['name']);
      		$this->setLastName($rows[0]['last_name']);
      		$this->setSsn($rows[0]['ssn']);
      		$this->setEmail($rows[0]['email']);

      		return true;
		}
		else{
			return false;
		}
		

	}
}

 ?>