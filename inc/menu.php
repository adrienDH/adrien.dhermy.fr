<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand nav-cursor border js-scroll-top">Adrien Dhermy</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="nav-cursor">
					<a href="<?= rootUrl() . $links["blog"] ?>">Blog</a>
				</li>
				<li class="nav-cursor">
					<a href="<?= rooturl() . $anchor["contact"] ?>">Contact</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a target="blank" href="./resources/pdf/CV_Adrien_Dhermy.pdf">CV PDF</a>
				</li>
			</ul>
		</div>
	</div>
</nav>


<!-- Ne pas oublier la class active au <li> -->