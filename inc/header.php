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
	
	<link rel="stylesheet" type="text/css" href="./resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./resources/css/common/common.css">
	<link rel="stylesheet" type="text/css" href="./resources/icomoon/style.css">
	<link rel="icon" type="image/png" href="./resources/images/adrien_dhermy.png" />

	<?php foreach($mainController->getCssPaths() as $css): ?>
		<?= "<link rel='stylesheet' type='text/css' href='" . $css .  ".css'>" ?>
	<?php endforeach;?>
	
	<!-- Suivi des users avec smartlook.com -->
	<script type="text/javascript">
    	window.smartlook||(function(d) {
    		var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    		var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
   	 	c.charset='utf-8';c.src='//rec.smartlook.com/recorder.js';h.appendChild(c);
    	})(document);
    	smartlook('init', '3db75da17eb2838ca65f1b315ef0359b290106bc');
	</script>
</head>

<body>