<!DOCTYPE html>
<html lang="fr">
	
	<head>
	
		<meta charset="utf-8" />
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
				echo '<div>'
				?>
				<div class= "book">
					

				<table class="book">
       				 <tr>
            			<th>Titre</th>
            			<th>Sorti</th>
            			<th>Synopsis</th>
            			<th>Auteur</th>
            			<th>Pages</th>
            			<th>Prix</th>
        			</tr>
				   <?php
				   echo
					 "<tr><td>". $livre['titre'] ."</td><td>". $livre['sorti'] ."</td><td>". $livre['synopsis'] ."</td><td>". $livre['auteur'] ."</td><td>". $livre['pages'] ."</td><td>". $livre['prix'] ."</td></tr>";    }
    					echo '</table>';
				
    				
    			'</div>'
				
    			?>
    		</div>
    	
    	</body>
	</html>