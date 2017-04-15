<?php 

include 'person.php';
include 'db_connection.php';

class Student extends Person
{
	private static $table_name = 'students';
	private $db_instance;
	private $mysqli;
	
	function __construct($_id, $name, $last_name, $ssn, $email)
	{
		parent::__construct($_id, $name, $last_name, $ssn, $email);
		$this->db_instance = dbConnection::getInstance();
		$this->mysqli = $this->db_instance->getConnection();
	}


	public function update($_id, $values){
		echo "UPDATE university." . self::$table_name . " SET last_name='$values' WHERE id=$_id";
		$this->mysqli->query("UPDATE university." . self::$table_name . " SET last_name='$values' WHERE id=$_id");

	}
}

 ?>