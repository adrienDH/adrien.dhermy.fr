<?php

function connexionSQL() {
	return new PDO('mysql:host=adriendhledhermy.mysql.db;dbname=adriendhledhermy;charset=utf8', 'adriendhledhermy', 'Adrien171192');
}