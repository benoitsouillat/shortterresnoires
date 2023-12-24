<?php

require_once('../Classes/RequestPDO.php');
require_once('../Classes/Puppy.php');

$pdo = new RequestPDO();
$stmt = $pdo->connect()->prepare(getAllPuppiesOrderLitter());
$stmt->execute();
$datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
$puppies = [];
foreach ($datas as $data) {

    $puppy = new Puppy();
    $puppy->fillFromFetchAssoc($data);


    $puppies[] = $puppy;
}
