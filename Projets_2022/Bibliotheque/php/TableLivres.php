<!DOCTYPE html>
<html>
    <head>
        <title>Livres</title>
    </head>
<body>
    <table>
        <tr>
            <th>Titre</th>
            <th>Sorti</th>
            <th>Synopsis</th>
            <th>Auteur</th>
            <th>Pages</th>
            <th>Prix</th>
        </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "Bibliotheque");
    if ($conn->connect_error){
        die("Connection failed:". $conn-> connect_error);
    }

    $sql = "SELECT * FROM livres";
    $result = $conn-> query($sql);

    if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
          echo "<tr><td>". $row["list_titre"] ."</td><td>". $row["list_sorti"] ."</td><td>". $row["list_synopsis"] ."</td><td>". $row["list_auteur"] ."</td><td>". $row["list_pages"] ."</td><td>". $row["list_prix"] ."</td></tr>";

        }
        echo "</table>";
    }
    else {
        echo "0 result";
    }

    
?>

</body>
</html>