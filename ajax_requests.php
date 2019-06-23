<?php

	include("new_config.php");
	include("database.php");
	include("models/date.php");

	if ($_POST['action'] == 'addDate') {
		echo "work";
		$title = $_POST['title'];
		$description = $_POST['description'];
		$maxCost = $_POST['maxCost'];
		$maxTime = $_POST['maxTime'];
		$add_result = Date::add_date($title, $description, $maxCost, $maxTime);
	}   

?>
