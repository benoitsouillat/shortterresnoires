<?php

include_once('../Models/sql/litter_request.php');
include_once('../Models/sql/repro_request.php');
include_once('../Classes/Litter.php');
include_once('../Classes/Repro.php');
include_once('../Classes/RequestPDO.php');

$pdo = new RequestPDO();

$stmt = $pdo->connect()->prepare(getAllLitters());
$stmt->execute();
$litters = $stmt->fetchAll(PDO::FETCH_OBJ);
