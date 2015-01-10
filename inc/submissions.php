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
	<section class="uk-width-1-1">
		<!-- Dropdown for city selection -->
		<div class="uk-panel uk-panel-box">
			<h3 class="uk-panel-title">Filter By City</h3>
			<form class="uk-form uk-form-stacked" method="get" action"">
				<select name="cities">
					<option selected disabled>Choose City</option>
					<option value="all">All Cities</option>
					<?php foreach($cities as $city) { ?>
						<option value="<?php echo $city["city"]; ?>"><?php echo $city["city"]; ?> </option>
					<?php } ?>
				</select>
				<button class="uk-button uk-button-primary" type="submit">Submit</button>
			</form>
		</div>
	</section>
	<section class="uk-width-1-1">
		<h2>Featured Images</h2>
		<?php
		foreach($submissions as $submission) { ?>
			<div class="uk-thumbnail uk-thumbnail-small results">
				<img src="<?php echo $submission["img"]; ?>" alt="<?php echo $submission["name"]; ?>">
				<div class="uk-thumbnail-caption">
					<p><?php echo $submission["name"];?></p>
					<p><?php echo $submission["city"];?></p>
				</div>
			</div>
		<?php } ?>
	</section>
<?php } // End else ?>
