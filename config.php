<?php
//Initialization of some variables for maintaining database data
$user="root";
$pass="cfa4b2b5";
$server="db4free.net";
$dbname="volunteerapp";

try {
	//Creating a PDO to connect with database
	$conn =new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
} catch (PDOException $e) {
	echo "error: " . $e->getMessage();
}

?>