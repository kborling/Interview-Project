<?php
        // Admin email
        $address = "kborling@gmail.com";

		// Send user email
		$email_body = "";
        $email_body = $email_body . "Name: " . $name . "<br>";
        $email_body = $email_body . "Email: " . $email . "<br>";
        $email_body = $email_body . "Phone Number: " . $phone . "<br>";
        $email_body = $email_body . "Address: " . $address . "<br>";
        $email_body = $email_body . "Zip: " . $zip . "<br>";
        $email_body = $email_body . "City: " . $city . "<br>";
        $email_body = $email_body . "State: " . $state;
        $mail->SetFrom($address, $name);
        $mail->AddAddress($email, "Interview Project");
        $mail->Subject    = "Form Submission | " . $name;
        $mail->AddEmbeddedImage($img, 'Featured Image');
        $mail->MsgHTML($email_body);

        // Send admin email
        $email_body = "";
        $email_body = $email_body . "Name: " . $name . "<br>";
        $email_body = $email_body . "Phone Number: " . $phone . "<br>";
        $email_body = $email_body . "Zip: " . $zip;
        $mail->SetFrom($address, $name);
        $mail->AddAddress($address, "Interview Project");
        $mail->Subject    = "Form Submission | " . $name;
        $mail->AddEmbeddedImage($img, 'Featured Image');
        $mail->MsgHTML($email_body);

?>