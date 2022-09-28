<?php

// Connection a la DB MySql
$hostname = 'localhost';
$username = 'admin';
$password = 'admin';

try {
    $db = new PDO("mysql:host=$hostname;dbname=filrouge", $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo ('Connected to database');
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

$db->query(file_get_contents('DB/bdd.sql')); // Appelle le fichier SQL qui reinitialise et recreer la base de donnees

include("appelApi.php");

// Stock les données de la première API dans la table 'especes'
foreach($array_especes as $espece) {
    $db->query('INSERT INTO especes(nom,id,description) VALUES ("'.$espece['nom'].'", '.$espece['id'].', "'.$espece['description'].'");');
}
foreach($array_poissons as $poisson) {
    $db->query('INSERT INTO poissons(nom,id,type,dureeVie,note,photo) VALUES ("'.$poisson['nom'].'", '.$poisson['id'].', '.$poisson['type'].',
    '.$poisson['dureeVie'].', "'.$poisson['note'].'", "'.$poisson['photo'].'")');
}
?>
