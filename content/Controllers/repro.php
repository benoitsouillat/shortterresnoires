<?php

include_once('../../conn/conn.php');
include_once('../Classes/Repro.php');
include_once('../Models/sql/repro_request.php');

$repro = new Repro();

if (isset($_POST['reproID']) && $_POST['reproID'] > 0) {
    $repro->setId($_POST['reproID']);
    $stmt = $conn->prepare(manageRepro());
    $stmt->bindValue(':reproID', $repro->getId());
} else {
    $stmt = $conn->prepare(createRepro());
}
$stmt->bindValue(':name', $_POST['reproName']);
$stmt->bindValue(':sex', $_POST['reproSex']);
$stmt->bindValue(':birthdate', $_POST['reproBirthdate']);
$stmt->bindValue(':insert', $_POST['reproInsert']);
$stmt->bindValue(':breeder', $_POST['reproBreeder']);
$stmt->bindValue(':adn', $_POST['reproADN']);

if (isset($_FILES['mainImg']) && $_FILES['mainImg']['name'] != NULL && $_FILES['mainImg']['size'] > 0) {

    if (isset($_POST['reproID']) && $_POST['reproID'] > 0) {
        $fileName = $repro->getName() . '-' . $repro->getId();
    } else {
        $fileName = $repro->getName() . '-0';
    }

    $file_tmp = $_FILES['mainImg']['tmp_name'];
    $file_destination = '../../src/img/repros/' . $fileName . '.jpg';
    move_uploaded_file($file_tmp, $file_destination);
    $stmt->bindValue(':mainImg', $file_destination);
    $repro->setMainImg($file_destination);
} else {
    $repro->setMainImg($_POST['mainImg']);
}

$stmt->bindValue(':mainImg', $repro->getMainImg());
try {
    $stmt->execute();
    header('Location:../Vues/repros.php');
} catch (PDOException $e) {
    echo "Une erreur s'est produite : " . $e;
}
