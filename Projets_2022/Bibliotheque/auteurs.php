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
		$auteurs = file_get_contents('https://filrouge.uha4point0.fr/V2/livres/auteurs');
		$auteurs = json_decode($auteurs, true);
		$auteur_id = "0";
			if(isset($_GET["id"])) {
    			$auteur_id = htmlspecialchars($_GET["id"]);
				}
	?>


	<body>
		<div class="welcomenav">
			<nav>
                <ul class="welcomebanner">
                	<li><a href="PagedAccueilBibliotheque1.html" target="_blank">Accueil</a></li>
                    <li><a href="livres.php" target="_blank">Livres</a></li>
                    <li><a href="auteurs.php" target="_blank">Auteurs</a></li>
                    <li><a href="RatingsPage.html" target="_blank">Page d'évaluation</a></li>
                </ul>
            </nav>

        	</div>

		<div class="imagelibrary">
		<img src="Images/AustriaGoettweigAbbey.jpg" alt="Photo de la bibliothèque de l'abbaye de Gottweig en Autriche" title="Abbaye de Goettweig en Autriche" />
		</div>
			
			<h1>Auteurs</h1>
				<div class="intro">
				<p>Voici la liste des auteurs de tous les livres dans ma bibliothèque. Pour plus d'information sur un auteur, clique sur son nom.</p>
				</div>

				<div class="Authors">
					<?php
						$boolean = false;
						foreach ($auteurs as $auteur) {
							if (htmlspecialchars($auteur["id"]) == $auteur_id) {
								$boolean = true;
							}
						
					?>
					<section class="Auteur">

						<h2><?= htmlspecialchars($auteur["prenom"])?> <?= htmlspecialchars($auteur["nom"])?></a></h2>
						<a href="Images/Balzac.jpg"><img src='<?= $auteur["photo"]?>' alt="Photo de Honoré de Balzac" title="Clique pour agrandir" width="150" /></a>
						<div>
                            <p>Naissance : <?= htmlspecialchars($auteur['naissance'])?></p>
                        </div>
                        <div>
                        	<p>Mort : <?= htmlspecialchars($auteur['mort'])?></p>
                        	<p>Biographie: <?= htmlspecialchars($auteur['biographie'])?></p>
                        </div>



    				</section>
					<?php }
					?>

    			</div>
		
	</body>
</html>
