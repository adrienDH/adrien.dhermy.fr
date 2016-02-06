<?php

function rootUrl() {
	
	$host = "";
	if($_SERVER["HTTP_HOST"] == "localhost") {
		$host = "localhost/";
	}
	
	return "http://" .$host . myDomain() . "/";
}

function connexionSQL() {
	return new PDO('mysql:host=localhost;dbname=site_cv;charset=utf8', 'root', 'root');
}