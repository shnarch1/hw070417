<?php 

include 'student.php';

$student = new Student(1, "moshe", "cohen", "123456789", "moshe@gmail.com");
// echo '<pre>';
// var_dump($student);
// echo '</pre>';
$student->update(1, 'test'); 
echo '<pre>';
var_dump($student);
echo '</pre>';


// $instance = dbConnection::getInstance();
// $mysqli = $instance->getConnection();

// $instance->setTableName("students");
// var_dump($instance->buildTableBody()) ;
// $table_body = $instance->buildTable();
//$table_head = $instance->buildTableHead();

// $result = $mysqli->query("SHOW columns FROM university.students");
// $result = $mysqli->query("SHOW tables IN university");
// $rows = [];
// while($row = $result->fetch_assoc()){
// 	$rows []= $row;
// }
// var_dump($rows);

// $rows = [];
// while($row = $result->fetch_assoc()){
// 	$rows []= $row;
// }

// echo "<pre>";
// var_dump($rows);
// echo "</pre>";



//	getColumns("students");
