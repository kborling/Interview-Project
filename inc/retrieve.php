<?php

//$statement = "SELECT name, city, img FROM userdata";

/*
 * Fetches all of the results from the database
 * Returns array of each user upload including name, city and featured image
 */
function get_all_submissions() {
	require(ROOT_PATH . "inc/database.php");

	try {
		$results = $db->prepare("
			SELECT name, city, img
			FROM userdata");
	} catch (Exception $e) {
		echo "Error: Data could not be retrieved from the database.";
        exit;
	}
	$matches = $results->fetchAll(PDO::FETCH_ASSOC);

    return $matches;
} // End get_all_submissions

/*
 * Fetches the results from the database based on the city selected from the city dropdown menu
 * Returns array of each user upload including name, city and featured image
 */
function get_city_submissions($city) {
    require(ROOT_PATH . "inc/database.php");

    try {
        $results = $db->prepare("
                SELECT name, city, img
                FROM userdata
                WHERE city LIKE ?");
        $results->bindValue(1,"%" . $city . "%");
        $results->execute();
    } catch (Exception $e) {
        echo "Error: Data could not be retrieved from the database.";
        exit;
    }
    $matches = $results->fetchAll(PDO::FETCH_ASSOC);

    return $matches;
} // End get_city_submissions

?>