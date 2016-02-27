<!doctype html5>
<html lang="fr">
<head>
	<title><?= $mainController->getMetaTitle() ?></title>
	<meta name="description" content="<?= $mainController->getMetaDescription() ?>" />
	<meta name="keywords" content="<?= $mainController->getMetaKeywords() ?>"> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="<?= rootUrl() ?>/resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= rootUrl() ?>/resources/css/common/common.css">
	<link rel="stylesheet" type="text/css" href="<?= rootUrl() ?>/resources/icomoon/style.css">
	<link rel="icon" type="image/png" href="<?= rootUrl() ?>/resources/images/adrien_dhermy.png" />

	<?php foreach($mainController->getCssPaths() as $css): ?>
		<?= "<link rel='stylesheet' type='text/css' href='" . rootUrl() . $css .  ".css'>" ?>
	<?php endforeach;?>
</head>

<body>