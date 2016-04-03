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
		<article class="article">
			<div class="row">
				<div class="hidden-xs hidden-sm col-md-2 bloc-img">
					<a href="<?= rootUrl() . $links["blog"] ."/" . $links["article-git"] ?>">
						<img class="link-img" src="<?= rootUrl() ?>/resources/images/d3js.png" alt="D3JS">
					</a>
				</div>
				<div class="col-xs-12 col-md-10">
					<h2 class="title-article"><a href="<?= rootUrl() . $links["blog"] ."/" . $links["article-lineChartD3"] ?>">Créer un Line Chart avec D3JS</a></h2>
					<div class="description">
						Comment Créer un graphique de type line chart avec D3JS ? Comment tracer les differentes lignes d'un graphique ? Comment créer des échelles
						avec des axes ? Je vous explique tout ici.
				</div>
			</div>
		</article>
	</div>
</div>