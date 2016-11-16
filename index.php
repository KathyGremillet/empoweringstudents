<?php
    $page = "accueil";
    $description = "Empowering Students - Accueil";

    include('./includes/header.php');
?>
<div class="wrapper accueil" id="main-content">

	<div class="bloc-accueil">
		<img src="images/home_bg-1.jpg" alt="We want you !"/>
		<h2>We want you !</h2>
	</div>

	<div class="bloc-fonctionnement">
		<div class="container">
			<div class="titre">
				<h1>Comment ça fonctionne</h1>
				<span class="titre-decoration"></span>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel euismod orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam laoreet metus ac leo vestibulum, eget tristique felis vestibulum. Nam vel orci lectus.</p>
			<div class="categories">
				<div class="categorie">
					<img src="images/icon-admin.png" alt="Icône Administration" />
					<h2>Administration</h2>
				</div>
				<div class="categorie">
					<img src="images/icon-cours.png" alt="Icône Cours" />
					<h2>Cours</h2>
				</div>
				<div class="categorie">
					<img src="images/icon-vie-scolaire.png" alt="Icône Vie étudiante" />
					<h2>Vie étudiante</h2>
				</div>
				<div class="categorie">
					<img src="images/icon-projets.png" alt="Icône Projets" />
					<h2>Projets</h2>
				</div>
				<div class="categorie">
					<img src="images/icon-soiree.png" alt="Icône Soirées" />
					<h2>Soirées</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="last-subjects">
		<div class="container">
			<div class="titre">
				<h1>Les derniers sujets</h1>
				<span class="titre-decoration"></span>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="bandeau">
						<img src="images/icon-subjects-admin.png" alt="Icône Administration" />
						<h2>Carte étudiante</h2>
					</div>
					<div class="bloc-img">
						<img src="images/subjects-vie-etudiante.jpg" alt="Fond catégorie : Vie étudiante"/>
						<h3>Réceptionnez votre carte étudiante</h3>
					</div>
					<div class="bloc-info">
						<p>Il reste</p>
						<p class="time">2j 18h 36min</p>
						<div>
							<a href="#" title="En savoir plus" class="btn-info">En savoir plus</a>
							<a href="#" title="Donner mon avis" class="btn-avis">Donner mon avis</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="bandeau">
						<img src="images/icon-subjects-admin.png" alt="Icône Administration" />
						<h2>Cours M2 DAUX</h2>
					</div>
					<div class="bloc-img">
						<img src="images/subjects-vie-etudiante.jpg" alt="Fond catégorie : Vie étudiante"/>
						<h3>Module Direction Artistique du mois de septembre</h3>
					</div>
					<div class="bloc-info">
						<p>Il reste</p>
						<p class="time">26j 5h 45min</p>
						<div>
							<a href="#" title="En savoir plus" class="btn-info">En savoir plus</a>
							<a href="#" title="Donner mon avis" class="btn-avis">Donner mon avis</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="bandeau">
						<img src="images/icon-subjects-admin.png" alt="Icône Administration" />
						<h2>Evénement BDE</h2>
					</div>
					<div class="bloc-img">
						<img src="images/subjects-vie-etudiante.jpg" alt="Fond catégorie : Vie étudiante"/>
						<h3>Lieu de réception pour la soirée de Noël</h3>
					</div>
					<div class="bloc-info">
						<p>Il reste</p>
						<p class="time">12j 5h 24min</p>
						<div>
							<a href="#" title="En savoir plus" class="btn-info">En savoir plus</a>
							<a href="#" title="Donner mon avis" class="btn-avis">Donner mon avis</a>
						</div>
					</div>
				</div>
			</div>

			<a href="#" title="En voir plus" class="btn-voirplus">+ En voir plus</a>

		</div>
	</div>

	<div class="next-events">
		<div class="container">
			<div class="titre">
				<h1>Les prochains événements</h1>
				<span class="titre-decoration"></span>				
			</div>
			<div class="calendar">
				<img src="images/calendrier.png" alt="Calendrier des prochains événements"/>
			</div>

			<a href="#" title="En voir plus" class="btn-voirplus">+ En voir plus</a>

		</div>
	</div>

</div>

<?php
    include('./includes/footer.php');
?>