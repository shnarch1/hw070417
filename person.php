<?php 

interface IDataManipulation{

	public function update();

}


abstract class Person implements IDataManipulation
{
	private $_id;
	private $name;
	private $last_name;
	private $ssn;
	private $email;

	function __construct($_id, $name, $last_name, $ssn, $email)
	{
		$this->_id = $_id;
		$this->name = $name;
		$this->last_name = $last_name;
		$this->ssn = $ssn;
		$this->email = $email;

	}

	public function __get($property) {
	    if (property_exists($this, $property)) {
	      return $this->$property;
	    }
	}

	public function setId($new_id){
		$this->_id=(int)$new_id;
	}

	public function setName($new_name){
		$this->name=(string)$new_name;
	}

	public function setLastName($new_last_name){
		$this->last_name=(string)$new_last_name;
	}

	public function setSsn($new_ssn){
		$this->ssn=(string)$new_ssn;
	}

	public function setEmail($new_email){
		$this->email=(string)$new_email;
	}


}


 ?>