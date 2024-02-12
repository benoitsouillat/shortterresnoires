<?php

require_once(__DIR__ . "/../content/Classes/RequestPDO.php");
require_once(__DIR__ . "/../content/Classes/User.php");
require_once(__DIR__ . "/../content/Classes/Repro.php");
require_once(__DIR__ . "/../content/Classes/Litter.php");
require_once(__DIR__ . "/../content/Classes/Puppy.php");
$conn = new RequestPDO();

if ($pdo = $conn->connect()) {
    $pdo->exec("DROP TABLE `terresnoires`.diapos");
    $pdo->exec("DROP TABLE `terresnoires`.puppies");
    $pdo->exec("DROP TABLE `terresnoires`.litters");
    $pdo->exec("DROP TABLE `terresnoires`.repros");
    $pdo->exec("DROP TABLE `terresnoires`.users");
}
