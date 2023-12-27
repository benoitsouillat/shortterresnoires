<?php

require_once('../Classes/RequestPDO.php');
require_once('../Classes/Puppy.php');
require_once('../Classes/User.php');
session_start();
$user = new User();
$user->fillFromSession($_SESSION);
$user->checkRole();

$pdo = new RequestPDO();
$puppy = new Puppy();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $puppy->fillFromPost($_POST);


    if (isset($_FILES['mainImg']) && $_FILES['mainImg']['name'] != NULL && $_FILES['mainImg']['size'] > 0) {
        if (isset($_POST['puppyID']) && $_POST['puppyID'] > 0) {
            $fileName = $puppy->getName() . '-' . $puppy->getId();
        }
        $file_tmp = $_FILES['mainImg']['tmp_name'];
        $file_destination = '../../src/img/puppies/' . $fileName . '.jpg';
        move_uploaded_file($file_tmp, $file_destination);
        // $stmt->bindValue(':mainImg', $file_destination);
        $puppy->setMainImg($file_destination);
    }

    if ($puppy->getId() > 0) {
        $puppy->fetchToDatabase();
    }
}


header('Location:../Vues/puppies.php');
