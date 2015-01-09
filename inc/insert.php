<?php

/*
 * Inserts all form submission data into database
 */
function insert_submission ($name, $phone, $email, $address, $zip, $city, $state, $img) {
	require(ROOT_PATH . "inc/database.php");

	try {
		$query = "INSERT INTO userdata (name, email, phone, address, zip, city, state, img)
		VALUES ('$name', '$email', '$phone', '$address', '$zip', '$city', '$state', '$img')";
		$db->exec($query);
	} catch (Exception $e) {
		echo "Error: Data could not be inserted into the database.";
        exit;
	}

} // End insert_submission

?>