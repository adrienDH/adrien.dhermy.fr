<?php

include("../fonc/fonc.php");

$db = connexionSQL();
$query = "INSERT INTO newsletter VALUES ('" . $_POST["email"] . "', '" . time() . "')";
$db->query($query);