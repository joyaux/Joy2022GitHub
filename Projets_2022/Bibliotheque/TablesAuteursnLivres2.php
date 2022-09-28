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

