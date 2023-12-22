<?php
require_once('../../conn/conn.php');

$stmt = $conn->prepare("SELECT * FROM Litters WHERE display = 1");
$stmt->execute();
$datas = $stmt->fetchAll(PDO::FETCH_ASSOC);

// foreach ($datas as $data) {
//     var_dump($data);
// }