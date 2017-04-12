<?php

include 'db_connection.php';
include 'functions.php';

$expected_user_input_keys = array("subject");

$user_input = $_GET;

if (!isKeyValid($user_input, $expected_user_input_keys)){
	ErrorPage(400, '400.html');
	die();
}

$db_instance = dbConnection::getInstance();
$mysqli = $db_instance->getConnection();

$subject = $mysqli->real_escape_string($user_input[$expected_user_input_keys[0]]);

$table_columns = getColumns($subject);

switch ($subject) {
    case "students":
        $table_head = "<tr> ";
        for ($i=0, $count=count($table_columns); $i<$count; $i++){
            $table_head .= "<th>$table_columns[$i]</th> ";
        }
        $table_head .= "</tr>";
        break;
    case "lecturers":
        echo "lecturers";
        break;
    case "courses":
        $table_head = "<tr> ";
        for ($i=0, $count=count($table_columns); $i<$count; $i++){
            $table_head .= "<th>$table_columns[$i]</th> ";
        }
        $table_head .= "</tr>";
        break;
    default:
        echo "default";
}

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
<!--  	
 	<?php 

 		for ($i = 0 ; $i < count($all_users); $i++){
 			echo '<tr>';
 			foreach ($all_users[$i] as $value) {
 				echo '<td>';
 				echo $value;
 				echo "</td>";;
 			}
 			echo '</tr>';
 		}

 	 ?> -->
 </table>

 </body>
 </html>