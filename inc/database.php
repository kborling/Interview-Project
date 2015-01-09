<?php
// Create DB Variable
include_once("config.php");
try {
	$db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT, DB_USER, DB_PASS);
	// Tell PDO object to throw exception when there's an error in the query
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// Set charset of database
	$db->exec("SET NAMES 'utf8'");

} catch (Exception $e) {
	echo "Error: Could not connect to the database.";
	exit;
}
?>