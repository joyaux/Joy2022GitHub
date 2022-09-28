<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="style.css"  />
		<title>Rating</title>
		<script src="https://kit.fontawesome.com/ad70bac96f.js" crossorigin="anonymous"></script>
		
	</head>

	<?php
		$livres = file_get_contents('https://filrouge.uha4point0.fr/V2/livres/livres');
		$livres = json_decode($livres, true);
	?>

	<body>

		<div class="welcomenav">
			<nav>
                <ul class="welcomebanner">
                	<li><a href="index.html" target="_blank">Accueil</a></li>
                    <li><a href="livres.php" target="_blank">Livres</a></li>
                    <li><a href="auteurs.php" target="_blank">Auteurs</a></li>
                    <li><a href="ratingspage.php" target="_blank">Page d'évaluation</a></li>
                </ul>
            </nav>

        </div>

        	<div class="imagelibrary">
				<img src="Images/AustriaGoettweigAbbey.jpg" alt="Photo de la bibliothèque de l'abbaye de Gottweig en Autriche" title="Abbaye de Goettweig en Autriche" />
			</div>

		<h1>Donne ton avis sur un livre/ Rate a book</h1>
		
			<div class="intro">
				<p>Voici les livres disponible dans ma bibliothèque:</p>
			</div>

			<div>


            <div>
					<?php 
					foreach ($livres as $livre) {
					
					?>		   
					<section class = "ratings">
                    <ul>
    					<li><a href="auteurs.php" target="_blank"><em><?= $livre["titre"]?></em></a></li>
    					
    					<li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
    				</ul>
                        </div>



    				</section>
		<?php } ?>
    			</div>

    	</div>

	</body>