<!DOCTYPE HTML>
<html lang=en>
    <head>
        <title>Auteurs</title>
        <meta charset = "UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>


    <?php 
    //Create Connection
    $mysqlClient = new PDO('mysql:host=localhost;dbname=Bibliotheque;charset=utf8','root','');


    $sqlQuery = 'SELECT * FROM auteurs';
     // Query Database  
    $auteursStatement = $mysqlClient->prepare($sqlQuery);
    $auteursStatement->execute();
    $auteurs = $auteursStatement->fetchAll();

    //Count the returned rows
    foreach ($auteurs as $auteur) {
    
    //Turn results into an array   

         echo "<table>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Naissance</th>
                <th>Mort</th>
                <th>Biographie</th>
                <th>Photo</th>
                <th>Genres</th>

            </tr>";
         // output data of each row
         while($row = mysqli_fetch_array($auteur)) {
            $id = $row['list_id'];
            $name = $row['list_nom'];
            $firstname = $row['list_prenom'];
            $birth = $row['list_naissance'];
            $death = $row['list_mort'];
            $bio = $row['list_biographie'];
            $photo = $row['list_photo'];
            $genres = $row['list_genres'];

            echo
            "<tr>
            
            <td>" . $name . "</td>
            <td>" . $firstname . "</td>
            <td>" . $birth . "</td>
            <td>" . $death . "</td>
            <td>" . $bio . "</td>
            <td>" . $photo . "</td>
            <td>" . $genres . "</td>
            </tr>";
         }
            echo "</table>";
         } else {
            echo "0 results";
         }

    ?>

</body>

</html>
