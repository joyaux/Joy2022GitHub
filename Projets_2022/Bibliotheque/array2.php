<!DOCTYPE html>

<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css"/>

</head>
<header> <a href="PagedAccueilBibliotheque1.html"><button>Accueil</button></a> </header>
    <h1>Auteurs</h1>
<body>
<section class="Authors">
<p>
<?php 
$json_string_api1 = file_get_contents("https://filrouge.uha4point0.fr/V2/livres/auteurs");
$array = json_decode($json_string_api1,true);

foreach ($array as $auteur) {
        echo $auteur["nom"].'<br>';
        echo strip_tags($auteur["description"]).'<br>';
        echo $auteur["role"].'<br>';
}
?>
</section>
</p>
