<?php
$servername = "XXX.XXX.XXX.XXX:3306";
$username = "XXXXX";
$password = "XXXXX";
$database = "XXXXX";

	try {
		$conn = new PDO('mysql:host='.$servername.'; dbname='.$database,$username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo("MySQL Error! Please contact the system admin.");
		exit();
	}

?>