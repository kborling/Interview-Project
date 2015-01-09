<?php

/*
 * Inserts all form submission data into database
 */
function insert_submission ($user) {
	//require(ROOT_PATH . "inc/database.php");
	require("./inc/database.php");
	try {
		$query = "INSERT INTO userdata (name, email, phone, address, zip, city, state, img)
		VALUES ('$user->name', '$user->email', '$user->phone', '$user->address', '$user->zip', '$user->city', '$user->state', '$user->img')";
		$db->exec($query);
	} catch (Exception $e) {
		echo "Error: Data could not be inserted into the database.";
        exit;
	}
	echo "Successful submission!";
} // End insert_submission

?>