<?php
require_once('../Classes/RequestPDO.php');
$pdo = new RequestPDO();

$stmt = $pdo->connect()->prepare("SELECT * FROM Litters WHERE display = 1");
$stmt->execute();
$datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
