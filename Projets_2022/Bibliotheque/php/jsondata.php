
<?php   //read the json file contents
    $jsondata = file_get_contents('auteurs.json');
?>
<?php   //convert json object to php associative array
    $data = json_decode($jsondata, true);
?>
<?php //get the author details
    $id = $data['id'];
    $nom = $lastname['nom'];
    $prenom = $firstname['prenom'];
    $naissance = $dob['naissance'];
    $mort = $death['mort'];
    $biographie = $bio['biographie'];
    $photo = $pic['photo'];
    $genre0 = $typ0['genre0'];
    $genre1 = $typ1['genre1'];
    $genre2 = $typ3['genre2'];
?>
<?php //insert into mysql table
    $sql = "INSERT INTO tbl_aut(id, nom, prenom, naissance, mort, biographie, photo, genre0, genre1, genre2
    VALUES('$id', '$nom', '$prenom', '$naissance', '$mort', '$biographie', '$photo', '$genre0', '$genre1', '$genre2')";
    if(!mysql_query($sql,$con))
    {
        die('Error : ' . mysql_error());
    }
?>