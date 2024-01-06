<?php

require_once(__DIR__ . "/../Classes/RequestPDO.php");
require_once(__DIR__ . "/../Classes/Repro.php");
require_once(__DIR__ . "/../Models/sql/repro_request.php");
require_once(__DIR__ . "/../Models/sql/litter_request.php");
require_once(__DIR__ . "/../Models/sql/images_request.php");

$pdo = new RequestPDO();
$jsonData = json_decode(file_get_contents("php://input"), true);

if (isset($jsonData['reproID'])) {
    $reproID = $jsonData['reproID'];

    $stmtRepro = $pdo->connect()->prepare(getReproFromID());
    $stmtRepro->bindValue(':reproID', $reproID);
    $stmtRepro->execute();
    $reproData = $stmtRepro->fetch(PDO::FETCH_ASSOC);

    $stmtBabyButton = $pdo->connect()->prepare(getReprosWithPuppies());
    $stmtBabyButton->execute();
    $reprosWithPuppies = $stmtBabyButton->fetchAll(PDO::FETCH_ASSOC);

    $stmtLitters = $pdo->connect()->prepare(getAllActiveLitters());
    $stmtLitters->execute();
    $littersActive = $stmtLitters->fetchAll(PDO::FETCH_ASSOC);

    $stmtImages = $pdo->connect()->prepare(getAllImagesFromReproId());
    $stmtImages->bindValue(':reproID', $reproID);
    $stmtImages->execute();
    $reproImages = $stmtImages->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode(['reproData' => $reproData, 'reprosWithPuppies' => $reprosWithPuppies, 'littersActive' => $littersActive, 'reproImages' => $reproImages]);
} else {
    echo json_encode(['error' => 'ID du repro non fourni']);
}
