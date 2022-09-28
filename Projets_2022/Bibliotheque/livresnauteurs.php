<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="style.css" />
		<title>Livres</title>
	</head>
	
	<?php
		include("accessdb.php");
		$livres = file_get_contents('https://filrouge.uha4point0.fr/V2/livres/livres');
		$livres = json_decode($livres, true);
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
			
			<h1>Livres</h1>
				<div class="intro">
				<p>Voici la liste des livres dans ma bibliothèque. Pour plus d'information sur un auteur, clique sur son nom.</p>
				</div>

				<div>
					<?php 
					foreach ($livres as $livre) {
					
					?>		   
					<section class = "book">

						<h2><a href="auteurs.php" target="_blank"><?= $livre["titre"]?></a></h2>
						<div>
                            <p>par <?= $livre["auteur"]?></p>
							<?php
							$sqlQuery = 'SELECT * FROM auteurs';
							$auteursStatement = $mysqlClient->prepare($sqlQuery);
							$auteursStatement->execute();
							$auteurs = $auteursStatement->fetchAll();

							//On affiche chaque auteur une à une
							foreach ($auteurs as $auteur) {
							?>
        
        					<p><?php echo $auteur['list_id']; ?></p>
        					<p><?php echo $auteur['list_prenom']; ?></p>
        					<p><?php echo $auteur['list_nom']; ?></p>
						
							<p>Année de parution : <?= $livre['sorti']?></p>
                        	<p>Pages : <?= $livre['pages']?></p>
                        	<p>Synopsis: <?= $livre['synopsis']?></p>
                        	<p>Prix : €<?= $livre['prix']?></p>
                        </div>



    				</section>
		<?php } ?>
    			</div>
		
	</body>
</html>