<div id="footer">
	<div class="container">
		<div class="title">Retrouvez moi sur :</div>
		<div class="links">
			<a href="https://www.linkedin.com/in/adrien-dhermy-b539778a?trk=hp-identity-name">
				<span class="icon icon-linkedin"></span>
			</a>
			<a href="https://github.com/adrienDH">
				<span class="icon icon-github"></span>
			</a>
		</div>
	</div>
</div>



<script type="text/javascript" src="./resources/jquery/jquery.js"></script>
<script type='text/javascript' src='./resources/bootstrap/js/bootstrap.min.js'></script>

<?php foreach($mainController->getJsPaths() as $js): ?>
	<?= "<script type='text/javascript' src='" . $js . ".js '></script>" ?>
<?php endforeach; ?>
</body>
</html>