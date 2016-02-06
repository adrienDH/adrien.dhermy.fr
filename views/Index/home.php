<?php 
	$mainController->addCssPaths(array(
		"./resources/css/home/home"
	));
	
	$mainController->addJsPaths(array(
			"./resources/js/home/home"
	));
?>

<div id="presentation">
	<div class="container">
		<div class="row">
			<div class="hidden-xs hidden-sm col-md-3">
				<div class="picture-wrapper">
					<img alt="Adrien Dhermy" src="./resources/images/adrien_dhermy.png">
				</div>
			</div>
			<div class="col-xs-12 col-md-9">
				<h1 class="title">
					Bonjour, Je suis <spans class="name">Adrien Dhermy</span>
				</h1>
				<h2 class="text">
					Développeur web Front End depuis 2 ans, j'habite Talence (à côté de Bordeaux).
					Je suis actuellement en CDI dans la société Jobijoba.
				</h2>
				<div class="button-wrapper">
					<div class="button js-more-infos">En savoir plus sur moi...</div>
					<div class="button contact js-contact">Me contacter</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="experiences">
	<div class="container">
		<h3 class="title">
			Mes expériences
		</h3>
		<div class="row">
			<h4 class="subtitle">Informatique : </h4>
			<div class="col-xs-12 col-md-4">
				<div class="bloc">
					<div class="year">Octobre 2014 à aujourd'hui</div>
					<div>
						<span class="jobtitle">Développeur Front</span> chez <span class="company">Jobijoba</span>
					</div>
					<div>
						en <span class="contract">CDI</span>
					</div>
					<div class="text">Travail dans le pôle front en communication avec les pôles marketing et Back End</div>
					<div class="text">
						Langages et compétences utilisés : 
						<span class="skills">PHP</span>, 
						<span class="skills">HTML</span>, 
						<span class="skills">CSS</span>, 
						<span class="skills">Jquery</span>, 
						<span class="skills">Bootstrap</span>, 
						<span class="skills">MongoDB</span>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="bloc">
					<div class="year">Février à Juillet 2014</div>
					<div>
						<span class="jobtitle">Développeur Front</span> au <span class="company">CNRS</span>
						<div>
							en <span class="contract">Stage (+3 semaine en CDD)</span>
						</div>
						<div class="text">Travail avec les laborantins pour stocker des mesures dans une base de données</div>
						<div class="text">
							Langages et compétences utilisés : 
							<span class="skills">PHP</span>, 
							<span class="skills">HTML</span>, 
							<span class="skills">CSS</span>, 
							<span class="skills">SQL</span>, 
							<span class="skills">PhpMyAdmin</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="bloc">
					<div class="year">Mai à Juin 2012</div>
					<span class="jobtitle">Conseiller technique</span> chez <span class="company">iConcept</span>
					<div>
						en <span class="contract">Stage</span>
					</div>
					<div class="text">Travail avec les commerciaux et techniciens pour la vente de matériel Apple</div>
					<div class="text">
						Langages et compétences utilisés : 
						<span class="skills">Préparation d'ordinateur</span>, 
						<span class="skills">MAC OSX</span>,
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<h4 class="subtitle">Autres : </h4>
			<div class="col-xs-12 col-md-6">
				<div class="bloc">
					<div class="year">Juillet - Août 2014</div>
					<span class="jobtitle">Agent de service</span> chez <span class="company">Saines Nettoyage</span>
					<div class="text">Entretien de plusieurs résidences</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="bloc">
					<div class="year">Vaccances 2009 à 2012</div>
					<span class="jobtitle">Réserviste</span> dans <span class="company">l'Armée de l'air</span>
					<div class="text">Sécurité et protection de la base 705 de Tours</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="skills">
	<div class="container">
		<h3 class="title">Mes compétences</h3>
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<span class="bar">
					<span class="full html"><span class="skill">HTML</span></span>
				</span>
				<span class="bar">
					<span class="full css"><span class="skill">CSS</span></span>
				</span>
				<span class="bar">
					<span class="full php"><span class="skill">PHP</span></span>
				</span>
				<span class="bar">
					<span class="full jquery"><span class="skill">Jquery</span></span>
				</span>
			</div>
			<div class="col-xs-12 col-md-6">
				<span class="bar">
					<span class="full bootstrap"><span class="skill">Bootstrap</span></span>
				</span>
				<span class="bar">
					<span class="full sql"><span class="skill">SQL</span></span>
				</span>
				<span class="bar">
					<span class="full linux"><span class="skill">Linux</span></span>
				</span>
				<span class="bar">
					<span class="full mongodb"><span class="skill">MongoDB</span></span>
				</span>
			</div>
		</div>
	</div>
</div>

<div id="formations">
	<div class="container">
		<h3 class="title">Mes formations</h3>
		<div class="row">
			<div class="col-xs-12 col-md-4">
				<div class="circle">
					<div class="year">2014</div>
					<div>
						<span class="degree">Licence professionnelle SARI</span> à l'IUT de Bordeaux (Mention B) 
					</div>
					<div class="department">
						33
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="circle">
					<div class="year">2013</div>
					<div>
						<span class="degree">BTS IRIS</span> au Lycée Grandmont de Tours (Mention AB)
					</div>
					<div class="department">
						37
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="circle">
					<div class="year">2011</div>
					<div>
						<span class="degree">BAC STI</span> au Lycée de la Plaine de l'Ain de Amberieu en Bugey (Mention AB)
					</div>
					<div class="department">
						01
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="contact">
	<div class="container">
		<h3 class="title">Me contacter</h3>
		<div class="form-wrapper">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<input class="js-target js-name" type="text" placeholder="Entreprise/Nom">
				</div>
				<div class="col-xs-12 col-md-6">
					<input class="js-email" placeholder="Email">
				</div>
				<div class="col-xs-12 ">
					<input class="js-subject" type="text" placeholder="Objet">
				</div>
				<div class="col-xs-12 ">
					<textarea class="js-message" placeholder="Message"></textarea>
				</div>
				<div class="error"></div>
				<div class="col-xs-12 col-md-6">
					<div class="button send js-send">
						Envoyer
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="button reset js-reset">
						Reset
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
