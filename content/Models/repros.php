<?php
include_once(__DIR__ . '/../../conn/conn.php');
include_once(__DIR__ . '/sql/repro_request.php');

$stmt = $conn->prepare(getAllRepros());
$stmt->execute();
$repros = $stmt->fetchAll(PDO::FETCH_OBJ);
