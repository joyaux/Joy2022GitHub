<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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

       
// From URL to get webpage contents.
$url = "https://filrouge.uha4point0.fr/V2/livres/livres";
 
// Initialize a CURL session.
$ch = curl_init();
 
// Return Page contents.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
//grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
//executez la requete
$result = curl_exec($ch);
//afffiche result
//**************************heres my prob
    //Turn results into an array   
$result=getdata($ch);
//decode
$data = json_decode($result, true);
//count


  //  ******************i can't use num_rows****** https://stackoverflow.com/questions/16700960/how-to-use-curl-to-get-json-data-and-decode-the-data
    
        ($row = $result-> fetch_assoc()) {
          echo "<tr><td>". $row["list_titre"] ."</td><td>". $row["list_sorti"] ."</td><td>". $row["list_synopsis"] ."</td><td>". $row["list_auteur"] ."</td><td>". $row["list_pages"] ."</td><td>". $row["list_prix"] ."</td></tr>";

        }
        echo "</table>";
    }
    else {
        echo "0 results";
    }

    
?>

</body>
</html>