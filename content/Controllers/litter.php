<?php

include_once('../../conn/conn.php');
include_once('../Classes/Litter.php');
include_once('../Models/sql/litter_request.php');

$litter = new Litter();

if (isset($_GET['litterID']) && $_GET['litterID'] != null) {

    // SUPPRESSION

    if (isset($_GET['delete']) && $_GET['delete'] == true) {
        $stmt = $conn->prepare(deleteLitterFromId());
        $stmt->bindParam(':litterID', $_GET['litterID']);
        $stmt->execute();
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $litter->fillFromForm($_POST);
    if (isset($_POST['litterID']) && $_POST['litterID'] != NULL && $_POST['litterID'] > 0) {

        // MODIFICATION 
        $stmt = $conn->prepare(manageLitter());
        $stmt->bindValue('litterID', $_POST['litterID']);
        $stmt->bindValue(':mother', $litter->getMother());
        $stmt->bindValue(':father', $litter->getFather());
        $stmt->bindValue(':birthdate', $litter->getBirthdate()->format('Y-m-d'));
        $stmt->bindValue(':numberOfPuppies', $litter->getNumberOfPuppies());
        $stmt->bindValue(':numberOfFemales', $litter->getNumberOfFemales());
        $stmt->bindValue(':numberOfMales', $litter->getNumberOfMales());
        $stmt->bindValue(':numberLof', $litter->getNumberLof());
        $stmt->bindValue(':display', $litter->getDisplay());
        $stmt->execute();
    } else {

        // CREATION

        $stmt = $conn->prepare(createLitter());
        $stmt->bindValue(':mother', $litter->getMother());
        $stmt->bindValue(':father', $litter->getFather());
        $stmt->bindValue(':birthdate', $litter->getBirthdate()->format('Y-m-d'));
        $stmt->bindValue(':numberOfPuppies', $litter->getNumberOfPuppies());
        $stmt->bindValue(':numberOfFemales', $litter->getNumberOfFemales());
        $stmt->bindValue(':numberOfMales', $litter->getNumberOfMales());
        $stmt->bindValue(':numberLof', $litter->getNumberLof());
        $stmt->bindValue(':display', $litter->getDisplay());
        $stmt->execute();
    }
}
header('Location:../Vues/litters.php');
