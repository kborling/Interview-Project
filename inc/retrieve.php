<?php

/*
 * Fetches all of the results from the database
 * Returns array of each user upload including name, city and featured image
 */
function get_all_submissions() {
	//require(ROOT_PATH . "inc/database.php");
    require("./inc/database.php");

	try {
		$results = $db->query("SELECT name, phone, zip, city, created_at, img 
            FROM userdata 
            ORDER BY created_at");
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
function get_city_submissions($selection) {
    //require(ROOT_PATH . "inc/database.php");
    require("./inc/database.php");

    try {
        $results = $db->prepare(" SELECT name, phone, zip, city, created_at, img
                FROM userdata
                WHERE city LIKE ?
                ORDER BY created_at");
        $results->bindValue(1,"%" . $selection . "%");
        $results->execute();
    } catch (Exception $e) {
        echo "Error: Data could not be retrieved from the database.";
        exit;
    }
    $matches = $results->fetchAll(PDO::FETCH_ASSOC);

    return $matches;
} // End get_city_submissions

/*
 * Populates the dropdown menu on the results page with all cities in the database
 */
function populate_dropdown() {

    require("./inc/database.php");

    try {
        $results = $db->query("SELECT DISTINCT(city) 
            AS city 
            FROM userdata 
            ORDER BY city DESC");
    } catch (Exception $e) {
        echo "Error: Data could not be retrieved from the database.";
        exit;
    }
    $matches = $results->fetchAll(PDO::FETCH_ASSOC);

    return $matches;
}


?>