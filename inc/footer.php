<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="title">Retrouvez moi sur :</div>
				<div class="links">
					<a title="Linkedin" rel="nofollow" href="https://www.linkedin.com/in/adrien-dhermy-b539778a?trk=hp-identity-name">
						<span class="icon icon-linkedin"></span>
					</a>
					<a title="Github" rel="nofollow" href="https://github.com/adrienDH">
						<span class="icon icon-github"></span>
					</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 bottom">
				<div class="title">Contact par téléphone :</div>
				<div class="links">
					<div class="numbers-phone">06.04.52.32.20</div>
				</div>
			</div>
		</div>
	</div>
</div>



<script type="text/javascript" src="./resources/jquery/jquery.js"></script>
<script type='text/javascript' src='./resources/bootstrap/js/bootstrap.min.js'></script>

<?php foreach($mainController->getJsPaths() as $js): ?>
	<?= "<script type='text/javascript' src='" . $js . ".js '></script>" ?>
<?php endforeach; ?>

<!-- Code pour Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49756115-5', 'auto');
  ga('send', 'pageview');
</script>

</body>
</html>