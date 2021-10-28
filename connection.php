<?php
  
function connect($dbname){
	$conn = "";

	try {
		$servername = "localhost:3306";
		$username = "root";
		$password = "";
	   
		$conn = new PDO(
			"mysql:host=$servername; dbname=$dbname",
			$username, $password
		);
		  
	   $conn->setAttribute(PDO::ATTR_ERRMODE,
						PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
	return $conn;
}   
  
?>