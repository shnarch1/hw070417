<?php 

include 'student.php';

$student = new Student();
// echo '<pre>';
// var_dump($student);
// echo '</pre>';
//echo $student->last_name;
// echo '<pre>';
// var_dump($student);
// echo '</pre>';
//$student->update();
$student->loadByID(1);
echo $student->_id;
var_dump($student);


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
