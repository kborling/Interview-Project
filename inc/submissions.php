<?php

require_once("./inc/retrieve.php");

$submissions = get_all_submissions();

	if (empty($submissions)) {
		echo "Sorry, there aren't any submissions!";
		//TODO: Send user to upload page.
	}
	else { ?>
		<!-- Dropdown for city selection -->
		<select>
			<?php foreach($submissions["city"] as $city) { ?>
				<option value="<?php echo $city; ?>"><?php echo $city; ?> </option>
			<?php } ?>
		</select>

		<?php
		foreach($submissions as $submission) { ?>
			<p><?php echo $submission["name"];?></p>
			<p><?php echo $submission["phone"];?></p>
			<p><?php echo $submission["zip"];?></p>
		<?php } 
	} // End else ?>