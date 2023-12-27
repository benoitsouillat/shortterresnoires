<?php

require_once('../Classes/RequestPDO.php');
require_once('../Classes/Puppy.php');
require_once('../Classes/Litter.php');

$pdo = new RequestPDO();
$puppiesShow = [];
$stmtLitter = $pdo->connect()->prepare(getAllActiveLitters());
$stmtLitter->execute();
$littersData = $stmtLitter->fetchAll(PDO::FETCH_OBJ);
foreach ($littersData as $data) {
    $litter = new Litter();
    $litter->fillFromStdClass($data);

    $stmtPuppy = $pdo->connect()->prepare(getAllPuppiesFromLitter());
    $stmtPuppy->bindParam(':litterID', $data->litterId);
    $stmtPuppy->execute();
    $puppiesData = $stmtPuppy->fetchAll(PDO::FETCH_ASSOC);
    $puppies = [];
    foreach ($puppiesData as $puppyData) {
        $puppy = new Puppy();
        $puppy->fillFromFetchAssoc($puppyData);
        $puppies[] = $puppy;
    }
    $puppiesShow[] = $puppies;
}