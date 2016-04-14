<?php 
	$mainController->addCssPaths(array(
		"/resources/css/Blog/lineChartD3"
	));
	$mainController->addJSPaths(array(
		"/resources/lib/D3JS/d3js",
		"/resources/js/Blog/lineChart"
	));
?>

<div class="container">
	<h1>Line chart avec D3JS</h1>
	<h2>Nous allons apprendre comment réaliser un graphique de type "line chart" avec une ou plusieurs courbes.</h2>
	<div class="row">
		<div class="col-xs-12">
			<div class="line-chart"></div>
		</div>
	</div>
</div>
