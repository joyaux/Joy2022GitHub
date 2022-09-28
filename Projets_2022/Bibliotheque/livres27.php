
<!DOCTYPE html>
<html lang="fr">
	
	<head>
	
		<meta charset="utf-8" >
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="style.css" />
		<title>Livres</title>
	
	</head>
	

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

				<h1 id="pagetop">Livres</h1>
				
				<p class="intro">
					Voici les livres disponible dans ma bibliothèque.
    			</p>

    		<div class="booklist">
    			
			<?php
				$livres = file_get_contents('https://filrouge.uha4point0.fr/V2/livres/livres');
				$livres_json = json_decode($livres, true);
				foreach($livres_json as $livre) {  
				?>

				<div class="book">

    				<?php
    				
    				
    				'<h2 id="LePereGoriot"><a href="Auteurs/Balzac.html#LePereGoriot" target="_blank"><em>Le Père Goriot</em>'. $livre['titre'] .'</a></h2>' 
    				?>


    					<a href="Livres/Covers/LePereGoriot.jpg" target="_blank"><img src="Livres/Covers/LePereGoriot.jpg" alt="couverture du livre" title="Clique pour agrandir" width="150" height="150"></a>
    		
    					<p>par <a href="auteurs.php?id=<?= htmlspecialchars($auteur["id"])?>&amp;auteur=<?=htmlspecialchars($auteur["nom"])?>"><?= htmlspecialchars($auteur["nom"])?><strong>Balzac</strong><?= htmlspecialchars($auteur["prenom"])?></a></p>

    					<p>Pages: <?= htmlspecialchars($livre["pages"])?></p>
    			
						<p>Synopsis: <?= htmlspecialchars($livre["synopsis"])?></p>
    						
    					<p>
    				
    					</p>
    						
    					<p>Prix: <?= htmlspecialchars($livre["prix"])?>€</p>
    						
    					<p>Année de parution: <?= htmlspecialchars($livre["sorti"])?></p>
    						
    					<a href="RatingsPage.html" target="_blank">Donne ton avis sur ce livre/ Rate this book</a>
						<p></p>
   						<a href="Livres.html#pagetop">Haut de page</a>
   					<?php }
   					?>
    			</div>
    		
    			
    		</div>
    	
    	</body>
	</html>