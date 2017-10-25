<!doctype html>
<html lang="fr">
<head>
	<title><?= $mainController->getMetaTitle() ?></title>
	<meta name="description" content="<?= $mainController->getMetaDescription() ?>" />
	<meta name="keywords" content="<?= $mainController->getMetaKeywords() ?>"> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php 
		$index = $mainController->getIndex() ? "index" : "noindex";
		$follow = $mainController->getFollow() ? "follow" : "nofollow";
	?>
	<meta name="robots" content="<?= $index ?>, <?= $follow ?>">
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="./resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./resources/icomoon/style.css">
	<link rel="stylesheet" type="text/css" href="./resources/css/main.css<?= "?v=" . time() ?>">

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	
	<link rel="icon" type="image/png" href="./resources/images/adrien_dhermy.png" />
</head>

<body>