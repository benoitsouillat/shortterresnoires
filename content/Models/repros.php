<?php
include_once(__DIR__ . '/../Classes/RequestPDO.php');
include_once(__DIR__ . '/sql/repro_request.php');

$pdo = new RequestPDO();

if (isset($_GET['order'])) {
    if ($_GET['order'] === 'malefirst') {
        $stmt = $pdo->connect()->prepare(getAllReprosOrderMale());
    } elseif ($_GET['order'] === 'femalefirst') {
        $stmt = $pdo->connect()->prepare(getAllReprosOrderFemale());
    } elseif ($_GET['order'] === 'femaleonly') {
        $stmt = $pdo->connect()->prepare(getAllFemalesRepro());
    } elseif ($_GET['order'] === 'maleonly') {
        $stmt = $pdo->connect()->prepare(getAllMalesRepro());
    }
} else {
    $stmt = $pdo->connect()->prepare(getAllRepros());
}
$stmt->execute();
$repros = $stmt->fetchAll(PDO::FETCH_OBJ);
