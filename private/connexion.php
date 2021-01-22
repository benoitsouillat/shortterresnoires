
<html>
<head>
</head>
<body>
<p>Coucou </p>

<?php

    $mongo = new MongoDB\Client('mongodb://@domaineterrenoire-shard-00-01.xbycl.mongodb.net:27017');
    $bdd = $mongo->dogs;    

    echo "coucou" + $bdd;


?>
</body>

</html>
