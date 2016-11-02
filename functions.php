<?php

	require("../../config.php");
	// functions.php
	//var_dump($GLOBALS);
	
	$database = "if16_karoku";
	$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
	
	require("User.class.php");
	$User = new User($mysqli);
	
	// see fail, peab olema kõigil lehtedel kus 
	// tahan kasutada SESSION muutujat
	session_start();
	
?>