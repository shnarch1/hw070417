<?php 

interface IDataManipulation{

	public function update($id, $values);

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
		$this->_name = $name;
		$this->last_name = $last_name;
		$this->ssn = $ssn;
		$this->email = $email;

	}


}


 ?>