<!DOCTYPE html>
<html>
    <head>
        <title>Authors Table</title>
    </head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Naissance</th>
            <th>Mort</th>
            <th>Biographie</th>
            <th>Photo</th>
            <th>Genres</th>
        </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "Bibliotheque");
    if ($conn->connect_error){
        die("Connection failed:". $conn-> connect_error);
    }

    $sql = "SELECT * FROM auteurs";
    $result = $conn-> query($sql);

    if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
          echo "<tr><td>". $row["list_id"] ."</td><td>". $row["list_nom"] ."</td><td>". $row["list_prenom"] ."</td><td>". $row["list_naissance"] ."</td><td>". $row["list_mort"] ."</td><td>". $row["list_biographie"] ."</td><td>". $row["list_photo"] ."</td><td>". $row["list_genres"] ."</td></tr>";

        }
        echo "</table>";
    }
    else {
        echo "0 result";
    }

    
?>

</body>
</html>