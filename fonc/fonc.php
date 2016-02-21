<?php

function rootUrl() {
	
	$host = "";
	if($_SERVER["HTTP_HOST"] == "localhost") {
		$host = "localhost/";
	}
	
	return "http://" .$host . myDomain() . "/";
}

function connexionSQL() {
	return new PDO('mysql:host=adriendhledhermy.mysql.db;dbname=adriendhledhermy;charset=utf8', 'adriendhledhermy', 'Adrien171192');
}