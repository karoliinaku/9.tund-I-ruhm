<?php

	require("../../config.php");
	
	$database = "if16_karoku";
	$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
	
	session_start();
	
	require("Helper.class.php");
	$Helper = new Helper();
?>