<?php
include_once(__DIR__ . '/../Classes/RequestPDO.php');
include_once(__DIR__ . '/sql/repro_request.php');

$pdo = new RequestPDO();
$stmt = $pdo->connect()->prepare(getAllRepros());
$stmt->execute();
$repros = $stmt->fetchAll(PDO::FETCH_OBJ);
