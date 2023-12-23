<?php

include_once('../../conn/conn.php');
include_once('../Models/sql/litter_request.php');
include_once('../Models/sql/repro_request.php');
include_once('../Classes/Litter.php');
include_once('../Classes/Repro.php');

$stmt = $conn->prepare(getAllLitters());
$stmt->execute();
$litters = $stmt->fetchAll(PDO::FETCH_OBJ);
