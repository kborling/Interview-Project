<?php

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

	// Ensure required fields aren't left blank
	if ($first == "" OR $last == "" OR $phone == "" OR $email == "" OR $address1 == "" OR $city == "" OR $state == "") {
	    $error_message = "You must specify a value for first name, last name, phone number, email address, address, city, and state.";
	    echo $error_message;
	}

	// Spam Prevention
	foreach($_POST as $value) {
		if(stripos($value,'Content-Type:') !== FALSE) {
			echo "There was a problem with the information you entered.";
			exit;
		} // End if
	} // End foreach

	require_once("./inc/phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();

    if (!isset($error_message) && !$mail->ValidateAddress($email)){
        $error_message = "You must specify a valid email address.";
    }
	// If no error exists, continue to create User object
	if(!isset($error_message)) {
		require_once("./inc/user.php");
		require_once("./inc/insert.php");
		// Concatenate name and address fields
		$name = $first . " " . $last;

		if(!isset($address2)) {
			$address = $address1 . ", " . $address2;
		}
		else {
			$address = $address1;
		}

		if(isset($_FILES['upload']) && !empty($_FILES['upload']['name'])) { 
			$dir = './uploads/';
			$fileName = $_FILES['upload']['name'];
			$tmpName = $_FILES['upload']['tmp_name'];
			$fileSize = $_FILES['upload']['size'];
			$fileType = $_FILES['upload']['type'];
			$img = $dir . $fileName;
			$result = move_uploaded_file($tmpName, $img);
			if (!$result) {
				echo "Error uploading file";
				exit;
			}
		}
		else {
			$img = './img/default.png';
		}
		// Create user object with collected data
		$user = new User($name, $phone, $email, $address, $zip, $city, $state, $img);
		// Insert user object into database
		insert_submission($user);

		// Send Emails to admin and user
        require_once('./inc/email.php');
 
		// Redirect user to results page
		header("Location: results.php");
		die();
	}

} // End POST

$pageTitle = "Upload";

include("./inc/header.php"); ?>
		<div class="uk-height-1-1">
			<section class="uk-vertical-align uk-text-center uk-height-1-1">
				<h2>Upload Your Featured Image!</h2>
				<div class="uk-vertical-align-middle">
				    <?php include('./inc/form.php'); ?>
			    </div>
			</section>
		</div>
<?php include("./inc/footer.php"); ?>