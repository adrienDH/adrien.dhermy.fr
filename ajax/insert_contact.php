<?php

include("../fonc/connexionSQL.php");

$db = connexionSQL();
$query = "INSERT INTO contact VALUES ('" . $_POST["name"] . "', '" . $_POST["email"] . "', '" . $_POST["subject"] . "', '" . $_POST["message"] . "', '" . time() . "')";
$db->query($query);

$headers = 'From: contact@adriendhermy.fr'."\n";
$headers .= 'Reply-To: contact@adriendhermy.fr'."\n";
$headers .= 'Content-Type: text/plain; charset="iso-8859-1"'."\n";
$headers .= 'Content-Transfer-Encoding: 8bit';

$message = "
	" . $_POST["name"] . " - " . $_POST["email"] . ",\n
	" . $_POST["message"] . "
";

$isSend = mail("adrien.dhermy@gmail.com", $_POST["subject"], $message, $headers);

if(!$isSend) {
	$content = "<div class='text'>Une erreur s'est produite, veuillez rééssayer ultérieurement</div>";
} else {
	$content = "
		<div class='text'>Félicitation votre message a bien été envoyé</div>
		<div class='text'>Je vous répondrai dès que possible</div>
	";
}

echo $content;