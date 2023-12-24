<?php

include_once('../Classes/RequestPDO.php');
include_once('../Classes/Litter.php');
include_once('../Models/sql/litter_request.php');

$litter = new Litter();
$pdo = new RequestPDO();

if (isset($_GET['litterID']) && $_GET['litterID'] != null) {

    // SUPPRESSION

    if (isset($_GET['delete']) && $_GET['delete'] == true) {
        $stmt = $pdo->connect()->prepare(deleteLitterFromId());
        $stmt->bindParam(':litterID', $_GET['litterID']);
        $stmt->execute();
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['litterID']) && $_POST['litterID'] != NULL && $_POST['litterID'] > 0) {
        $stmt = $pdo->connect()->prepare(getLitterFromId());
        $stmt->bindValue(':litterId', $_POST['litterID']);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_OBJ);
        $litter->fillFromStdClass($data);
        $nbmales = $data->numberOfMales;
        $nbfemales = $data->numberOfFemales;

        if ($nbmales != intval($_POST['numberOfMales'])) {
            $litter->setNumberOfMales($_POST['numberOfMales']);
            $litter->generatePuppiesMales();
        }
        if ($nbfemales != intval($_POST['numberOfFemales'])) {
            $litter->setNumberOfFemales($_POST['numberOfFemales']);
            $litter->generatePuppiesFemales();
        }
    }

    $litter->fillFromForm($_POST);
    if (isset($_POST['litterID']) && $_POST['litterID'] != NULL && $_POST['litterID'] > 0) {

        // MODIFICATION 
        $stmt = $pdo->connect()->prepare(manageLitter());
        $stmt->bindValue(':litterId', $_POST['litterID']);
        $stmt->bindValue(':mother', $litter->getMother()->getId());
        $stmt->bindValue(':father', $litter->getFather()->getId());
        $stmt->bindValue(':birthdate', $litter->getBirthdate()->format('Y-m-d'));
        $stmt->bindValue(':numberOfPuppies', $litter->getNumberOfPuppies());
        $stmt->bindValue(':numberOfFemales', $litter->getNumberOfFemales());
        $stmt->bindValue(':numberOfMales', $litter->getNumberOfMales());
        $stmt->bindValue(':numberLof', $litter->getNumberLof());
        $stmt->bindValue(':display', $litter->getDisplay());
        $stmt->execute();
    } else {
        // CREATION
        $stmt = $pdo->connect()->prepare(createLitter());
        $stmt->bindValue(':mother', $litter->getMother()->getId());
        $stmt->bindValue(':father', $litter->getFather()->getId());
        $stmt->bindValue(':birthdate', $litter->getBirthdate()->format('Y-m-d'));
        $stmt->bindValue(':numberOfPuppies', $litter->getNumberOfPuppies());
        $stmt->bindValue(':numberOfFemales', $litter->getNumberOfFemales());
        $stmt->bindValue(':numberOfMales', $litter->getNumberOfMales());
        $stmt->bindValue(':numberLof', $litter->getNumberLof());
        $stmt->bindValue(':display', $litter->getDisplay());
        $stmt->execute();
        $litter->generatePuppiesMales();
        $litter->generatePuppiesFemales();
    }
}
header('Location:../Vues/litters.php');
