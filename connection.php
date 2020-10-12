<?php

function Connect()
{
	$server = "sql108.epizy.com";
	$dbuser = "epiz_26777309";
	$dbpass = "eRHrZ17vIST7tn";
	$dbname = "epiz_26777309_tsvfoods";

	//Create Connection
	$conn = new mysqli($server, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>