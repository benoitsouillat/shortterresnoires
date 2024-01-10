<?php

include_once('../Classes/RequestPDO.php');
include_once('../Classes/Repro.php');
include_once('../Models/sql/repro_request.php');

$repro = new Repro();
$pdo = new RequestPDO();

if (isset($_GET['delete']) && [$_GET['delete'] == true]) {
    $stmt = $pdo->connect()->prepare(deleteReproFromId());
    $stmt->bindValue(':reproID', $_GET['reproID']);
    try {
        $stmt->execute();
        header('Location:../Vues/repros.php');
    } catch (PDOException $e) {
        header('Location:../Vues/repro-crud.php?reproID=' . $_GET['reproID'] . '&error=' . $e->getCode());
    }
}

if (isset($_POST['reproID']) && $_POST['reproID'] > 0) {
    $repro->setId($_POST['reproID']);
    $stmt = $pdo->connect()->prepare(manageRepro());
    $stmt->bindValue(':reproID', $repro->getId());
} else {
    $stmt = $pdo->connect()->prepare(createRepro());
}
$repro->fillFromForm();
$repro->checkMainImg();
$repro->saveDiapoImg();
$stmt->bindValue(':name', $_POST['reproName']);
$stmt->bindValue(':sex', $_POST['reproSex']);
$stmt->bindValue(':birthdate', $_POST['reproBirthdate']);
$stmt->bindValue(':insert', $_POST['reproInsert']);
$stmt->bindValue(':breeder', $_POST['reproBreeder']);
$stmt->bindValue(':adn', $_POST['reproADN']);
$stmt->bindValue(':notMyDog', $_POST['notMyDog']);
$stmt->bindValue(':mainImg', $repro->getMainImg());
try {
    $stmt->execute();
    header('Location:../Vues/repros.php');
} catch (PDOException $e) {
    echo "Une erreur s'est produite : " . $e;
}
