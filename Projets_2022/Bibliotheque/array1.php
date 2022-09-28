<?php 
$json_string_api2 = file_get_contents("https://filrouge.uha4point0.fr/V2/miyasaki/films");
$array = json_decode($json_string_api2,true);
foreach ($array as $film) {
    echo '<img '.'href = "API2.php"'.' src= "'.$film["image"].'"/ >'.'<br/>'; 
    echo $film["nom"].'<br/>';
    echo $film ["annee"].'<br/>';
    echo strip_tags($film["note"]).'<br/>';
    echo '<a href ="'.$film["trailer"].'">Trailer</a>'.'<br/>';
    foreach($film["Genre"] as $film2){
    echo'<li>'.$film2.'<br>';
    }
}
?>
