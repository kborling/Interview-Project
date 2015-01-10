<?php

//TODO: Retrieve all submissions from database. Add dropdown to sort based on city.

$pageTitle = "Results";

include("./inc/header.php"); ?>

	<div class="uk-grid" data-uk-grid-margin>
			<?php include("./inc/submissions.php"); ?>
	</div>

<?php include("./inc/footer.php"); ?>