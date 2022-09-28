<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="style.css" />
		<title>Auteurs</title>
	</head>
	
	<?php
		$livres = file_get_contents('https://filrouge.uha4point0.fr/V2/livres/livres');
		$livres_json = json_decode($livres, true);
		$livre_id = "0";
			if(isset($_GET["id"])) {
    			$livre_id = htmlspecialchars($_GET["id"]);
				}
	?>


	<body>
		<div class="welcomenav">
			<nav>
                <ul class="welcomebanner">
                	<li><a href="PagedAccueilBibliotheque1.html" target="_blank">Accueil</a></li>
                    <li><a href="Livres.html" target="_blank">Livres</a></li>
                    <li><a href="Auteurs.html" target="_blank">Auteurs</a></li>
                    <li><a href="RatingsPage.html" target="_blank">Page d'évaluation</a></li>
                </ul>
            </nav>

        	</div>

		<div class="imagelibrary">
		<img src="Images/AustriaGoettweigAbbey.jpg" alt="Photo de la bibliothèque de l'abbaye de Gottweig en Autriche" title="Abbaye de Goettweig en Autriche" />
		</div>
			
			<h1>Livres</h1>
				<div class="intro">
				<p>Voici la liste des livres dans ma bibliothèque. Pour plus d'information sur un auteur, clique sur son nom.</p>
				</div>

				<div class="Authors">
					<?php
						$boolean = false;
						foreach ($livres as $livre) {
							if (htmlspecialchars($livre["id"]) == $livre_id) {
								$boolean = true;
							}
						
					?>
					<section class="Auteur">

						<h2><a href="Auteurs/Balzac.html" target="_blank"><?= htmlspecialchars($livre["titre"])?> <?= htmlspecialchars($livre["auteur"])?></a></h2>
						<a href="Images/Balzac.jpg"><img src="Livres/Covers/LaTresse.jpeg" alt="Photo de Honoré de Balzac" title="Clique pour agrandir" width="150" /></a>
						<div>
                            <p>Année de parution : <?= htmlspecialchars($livre['sorti'])?></p>
                        </div>
                        <div>
                        	<p>Pages : <?= htmlspecialchars($livre['pages'])?></p>
                        	<p>Synopsis: <?= htmlspecialchars($livre['synopsis'])?></p>
                        	<p>Prix : <?= htmlspecialchars($livre['prix'])?></p>
                        </div>



    				</section>
					<?php }
					?>

    			</div>
		
	</body>
</html>
