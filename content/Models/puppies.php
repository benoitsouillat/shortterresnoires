<?php

require_once('../Classes/RequestPDO.php');
// require_once('../../conn/conn.php');
require_once('../Classes/Puppy.php');

$conn = new RequestPDO();
$stmt = $conn->connect()->prepare(getAllPuppiesOrderLitter());
$stmt->execute();
$datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
$puppies = [];
foreach ($datas as $data) {

    $puppy = new Puppy();
    $puppy->fillFromFetchAssoc($data);


    $puppies[] = $puppy;
}
