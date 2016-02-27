<?php
	$mainController->addMetaTitle("Astuces Développeur web");
	$mainController->addMetaDescription("Les trucs et astuces des développeurs web");
	$mainController->addMetaKeywords("actuces, trucs, développeur, web, blog, blog développeur");
	
	$mainController->addCssPaths(array(
		"/resources/css/Blog/home",
	));
?>

<div class="container">
	<h1>Les trucs et actuces des développeurs web</h1>
	<div class="articles">
		<div class="article">
			<div class="row">
				<div class="hidden-xs hidden-sm col-md-2 bloc-img">
					<a href="#">
						<img class="link-img" src="<?= rootUrl() ?>/resources/images/dploy.gif" alt="Dploy">
					</a>
				</div>
				<div class="col-xs-12 col-md-10">
					<h2 class="title-article"><a href="<?= rootUrl() . $links["blog"] ."/" . $links["article-dploy"] ?>">Déployé avec Dploy</a></h2>
					<div class="description">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div>
				</div>
			</div>
		</div>
		<div class="article">
			<div class="row">
				<div class="hidden-xs hidden-sm col-md-2 bloc-img">
					<a href="#">
						<img class="link-img" src="<?= rootUrl() ?>/resources/images/htaccess.png" alt="Dploy">
					</a>
				</div>
				<div class="col-xs-12 col-md-10">
					<h2 class="title-article"><a href="<?= rootUrl() . $links["blog"] ."/" . $links["article-reecriture-url"] ?>">Réécrire ses urls</a></h2>
					<div class="description">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div>
				</div>
			</div>
		</div>
		<div class="article">
			<div class="row">
				<div class="hidden-xs hidden-sm col-md-2 bloc-img">
					<a href="#">
						<img class="link-img" src="<?= rootUrl() ?>/resources/images/git.png" alt="Dploy">
					</a>
				</div>
				<div class="col-xs-12 col-md-10">
					<h2 class="title-article"><a href="<?= rootUrl() . $links["blog"] ."/" . $links["article-git"] ?>">Versionné vos projet avec Git</a></h2>
					<div class="description">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>