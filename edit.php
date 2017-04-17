<?php 

include 'student.php';
include 'functions.php';

$expected_user_input_keys = array("subject", "id");

$user_input = $_GET;
if (!isKeyValid($user_input, $expected_user_input_keys)){
	ErrorPage(400, '400.html');
	die();
}



$student = new Student();
if(!$student->loadByID(2)){
	ErrorPage(400, '400.html');
    die();
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit profile</title>
	<style type="text/css">
		input{
			display: block;
		}
	</style>
</head>
<body>

<label>Name:<input type="text" name="name" value=<?php echo $student->name; ?>></label>
<label>Last Name:<input type="text" name="last_name" value=<?php echo $student->last_name; ?>></label>
<label>SSN:<input type="number" name="ssn" value=<?php echo $student->ssn; ?>></label>
<label>Email:<input type="email" name="email" value=<?php echo $student->email ?>></label>
<input type="submit" value='Save'>


</body>
</html>