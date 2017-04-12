<?php 

function isKeyValid($user_input, $expected){	

	if (count($user_input) != count($expected)){
		return false;
	}

	for ($i=0; $i<count($expected); $i++){	
		if (!array_key_exists($expected[$i], $user_input)){
			return false;
		}
	}

	return true;
}

function ErrorPage($status_code, $url){

	http_response_code($status_code);
	include $url;
}

function redirect($url, $status_code){

	header('Location: ' . $url, true, $status_code);
   	exit();	
}

// function getColumns($table_name){

// 	try {

// 		$db_instance = dbConnection::getInstance();
// 		$mysqli = $db_instance->getConnection();
	
// 		$query = $mysqli->query("SHOW columns FROM " . $db_instance->getDbName() ."." . $table_name);
		
// 	} catch (Exception $e) {
// 		echo "Database connection error";
// 		return false;
// 	}	

// 	$rows = [];
// 	while($row = $query->fetch_assoc()){
// 		$rows []= $row;
// 	}

// 	$columns =[];
// 	for ($i=0, $count=count($rows); $i < $count; $i++){
// 		$columns []= $rows[$i]['Field'];
// 	}

// 	if (empty($columns)){
// 		return false;
// 	}
// 	else{
// 		return $columns;
// 	}


// }


?>