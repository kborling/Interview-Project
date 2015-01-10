<?php

require_once("./inc/retrieve.php");
require_once("./inc/config.php");

if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['cities'])) {
	$selection = $_GET['cities'];
	if($selection == 'all')
		$submissions = get_all_submissions();
	else
		$submissions = get_city_submissions($selection);
}
else {
	$submissions = get_all_submissions();
}
if (empty($submissions)) {
	echo "Sorry, there aren't any submissions!";
	//TODO: Send user to upload page.
}
else { 
	$cities = populate_dropdown(); ?>
	<!-- Dropdown for city selection -->
	<h2>Filter By City</h2>
	<form method="get" action"">
		<select name="cities">
			<option selected disabled>Choose City</option>
			<option value="all">All Cities</option>
			<?php foreach($cities as $city) { ?>
				<option value="<?php echo $city["city"]; ?>"><?php echo $city["city"]; ?> </option>
			<?php } ?>
		</select>
		<input type="submit" value="submit" />
	</form>
	<?php
	foreach($submissions as $submission) { ?>
		<p><?php echo $submission["created_at"];?></p>
		<p><?php echo $submission["name"];?></p>
		<p><?php echo $submission["phone"];?></p>
		<p><?php echo $submission["city"];?></p>
		<p><?php echo $submission["zip"];?></p>
		<img src="<?php echo $submission["img"]; ?>" alt="<?php echo $submission["name"]; ?>">
	<?php } 
} // End else ?>