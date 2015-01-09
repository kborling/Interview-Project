<?php
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first = trim($_POST["first"]);
    $last = trim($_POST["last"]);
    $phone = trim($_POST["phone"]);
    $email = trim($_POST["email-address"]);
    $address1 = trim($_POST["address1"]);
    $address2 = trim($_POST["address2"]);
    $zip = trim($_POST["zip"]);
    $city = trim($_POST["city"]);
    $state = trim($_POST["state"]);
    $img = trim($_POST["img"]);

	// Ensure required fields aren't left blank
	if ($first == "" OR $last == "" OR $phone == "" OR $email == "" OR $address1 == "" OR $city == "" OR $state == "") {
	    $error_message = "You must specify a value for first name, last name, phone number, email address, address, city, and state.";
	    echo $error_message;
	}
	// If no error exists, continue to create User object
	if(!isset($error_message)) {
		require_once("./inc/user.php");
		require_once("./inc/insert.php");
		// Concatenate name and address fields
		$name = $first . " " . $last;

		if(!isset($address2))
			$address = $address1 . ", " . $address2;
		else
			$address = $address1;
		// Create user object with collected data
		$user = new User($name, $phone, $email, $address, $zip, $city, $state, $img);

		//echo var_dump(get_object_vars($user)); // Remove
		// Insert user object into database
		insert_submission($user);
	}

} // End POST

*/

//TODO: Retrieve all submissions from database. Add dropdown to sort based on city.

$pageTitle = "Results";

include("./inc/header.php"); 

require_once("./inc/retrieve.php");

$submissions = get_all_submissions();

include("./inc/submissions.php");

?>

<?php include("./inc/footer.php"); ?>