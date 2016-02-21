<?php

include("../fonc/connexionSQL.php");

$db = connexionSQL();
$query = "INSERT INTO newsletter VALUES ('" . $_POST["email"] . "', '" . time() . "')";
$db->query($query);