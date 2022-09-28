
<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=partage_de_recettes;charset=utf8','root','');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

