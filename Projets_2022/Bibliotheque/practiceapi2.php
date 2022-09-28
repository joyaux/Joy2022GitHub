<!-- Recupere les données de l'API et les convertit en variable PHP-->
<?php
    $json_string_espece = file_get_contents("https://filrouge.uha4point0.fr/V2/ocean/especes");
    // $json_string_espece = file_get_contents("DB/especes.json");
    $array_especes = json_decode($json_string_espece, true);
    
    $json_string_poisson = file_get_contents("https://filrouge.uha4point0.fr/V2/ocean/poissons");
    // $json_string_poisson = file_get_contents("DB/poissons.json");
    $array_poissons = json_decode($json_string_poisson, true);
?>
