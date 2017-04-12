<?php 

include 'db_connection.php';

$instance = dbConnection::getInstance();
$mysqli = $instance->getConnection();

$instance->setTableName("courses");
$table_head = $instance->buildTableHead();

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

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>All Users</title>
 	<style type="text/css">
 		td{
 			text-align: center;
 		}
 	</style>
 </head>
 <body>
 
 <table border="1">
    <?php
        echo $table_head;
    ?>
 </table>

 </body>
 </html>