<?php

function rootUrl() {
	
	$host = "";
	if($_SERVER["HTTP_HOST"] == "localhost") {
		$host = "localhost/";
	}
	
	return "http://" .$host . myDomain() . "/";
}
