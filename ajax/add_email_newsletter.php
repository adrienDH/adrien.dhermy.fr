<?php

include("../fonc/fonc.php");

var_dump($_POST["email"]);die();

$db = connexionSQL();
$query = "INSERT INTO newsletter VALUES ('" . $_POST["email"] . "', '" . time() . "')";
$db->query($query);