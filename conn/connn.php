<?php

$dsn = "mysql:host=localhost;port=3306;dbname=terresnoires";
$username = "root";
$password = "";

try {
    $conn = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo "Une erreur s'est produite : " . $e;
}
