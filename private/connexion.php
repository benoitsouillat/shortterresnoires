
<html>
<head>
</head>
<body>
<p>

<?php
/*

    $mongo = new MongoDB\Client('mongodb://@domaineterrenoire-shard-00-01.xbycl.mongodb.net:27017');
    $bdd = $mongo->dogs;    

    echo "coucou" + $bdd;
*/
    $host = "127.0.1.1";
    //$port = "5432";
    $username = "venture";
    $password = "furious";
    $canecorso = "lecanecorso";
    $dogname = $_POST['dogname'];

    $createTable = "CREATE TABLE test (id int, word VARCHAR(10))";
    $showDogs = "SELECT * FROM dogs";
    $insertDogs = "INSERT INTO doggy (dogname) VALUES ('$dogname')";
    $insertHam = "INSERT INTO doggy (dogname) VALUES ('Ham')";


    echo nl2br("Voici la variable : ".$dogname."\r\n");
    try {
        $dbconn = new PDO('mysql:host='.$host.'dbname='.$canecorso, $username, $password);
        echo nl2br("Vous êtes connecté à la base de données \r\n");
    }
    catch(Exception $e) {
        die("Erreur : " . $e->getMessage());
    }
    /*
    try {
        $resultset = $dbconn->prepare($showDogs);
        $resultset->execute();
    }
    catch(Exception $e) {
        die("Erreur :  " . $e->getMessage());
    }*/
    echo nl2br("\n\r Version OpenClassrooms : \n\r");
    try {
        $reponse = $dbconn->exec($showDogs);
    }
    catch(Exception $e) {
        die("Erreur : " . $e->getMessage());
    }

    echo ($reponse->fetch());

    while ($donnees = $reponse->fetch())
    {
        echo $donnees['dogname'];
    }
    $reponse->closeCursor();

?>

</p>
</body>

</html>
