<?php
include("../fonc/fonc.php");

$db = connexionSQL();

$query = "INSERT INTO contacts VALUES ('" . $_POST["name"] . "', '" . $_POST["email"] . "', '" . $_POST["subject"] . "', '" . $_POST["message"] . "')";
$reponse = $db->query($query);

if(!$reponse) {
	$content = "<div class='text'>Un erreur s'est produit, veuillez rééssayer ulterieurement</div>";
} else {
	$content = "
		<div class='text'>Félicitation votre message à bien était envoyé</div>
		<div class='text'>Je vous répondrai dès que possible</div>
	";
}
echo $content;