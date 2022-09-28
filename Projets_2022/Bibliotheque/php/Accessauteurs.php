<?php
try
{
        //On se connecte à MySQL
        $mysqlClient = new PDO('mysql:host=localhost;dbname=Bibliotheque;charset=utf8','root','');
}
catch (Exception $e)
{
        //En cas d'erreur, on affiche un message et on arrète tout
        die('Erreur : ' . $e->getMessage());
}

//Si tout va bien, on peut continuer

//On récupère tout le contenu de la table auteurs
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

        <?php

}
?>