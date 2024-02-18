<?php
require_once(__DIR__ . '/../Classes/RequestPDO.php');
require_once(__DIR__ . '/../Models/sql/images_request.php');

$pdo = new RequestPDO();

if (isset($_GET['delete']) && $_GET['delete'] == true) {
    $stmt = $pdo->connect()->prepare(deleteImageFromDiapoId());
    try {
        $stmt->bindValue(':diapoID', $_GET['diapoID']);
    } catch (PDOException $e) {
        header('Location:../Vues/administration.php');
    }
    $stmt->execute();
    if ($_GET['type'] === 'repro') {
        header('Location:../Vues/repro-crud.php?reproID=' . $_GET['id']);
    } elseif ($_GET['type'] === 'puppy') {
        header('Location:../Vues/puppy-crud.php?puppyID=' . $_GET['id']);
    }
}
