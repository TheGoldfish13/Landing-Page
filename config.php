<?php

require_once(__DIR__ . "/database.php");

	session_start();
	session_regenerate_id(true);

    $path = "/LandingPage/";

	$host     =  "localhost";
	$username =  "root";
	$password =  "root";
	$database =  "contact_me";

	if (!isset($_SESSION["connection"])) {


		$connection = new Database($host, $username, $password, $database);

		$_SESSION["connection"] = $connection;
     }