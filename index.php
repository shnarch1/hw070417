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

$db_instance->setTableName($subject);
if ($db_instance->getTableName() == null){
    ErrorPage(400, '400.html');
    die();
}
$table = $db_instance->buildTable();

?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>All Users</title>
 	<style type="text/css">
 		table{
            text-align:center;
            margin-left:auto; 
            margin-right:auto;
        }
        td, th{
 			text-align: center;
 		}
        header{
            text-align: center;
        }
 	</style>
 </head>
 <body>
 <header>
     <h1><?php echo ucfirst($subject) . " Table" ?></h1>
 </header>
 <main>
     <table border="1">
        <?php
            echo $table;
        ?>
     </table>
 </main>

 </body>
 </html>