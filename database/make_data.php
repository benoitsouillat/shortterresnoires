<?php

require_once(__DIR__ . "/../content/Classes/RequestPDO.php");
require_once(__DIR__ . "/../content/Classes/User.php");
require_once(__DIR__ . "/../content/Classes/Repro.php");
require_once(__DIR__ . "/../content/Classes/Litter.php");
require_once(__DIR__ . "/../content/Classes/Puppy.php");
$conn = new RequestPDO();
$user = new User();
$mother = new Repro('Josette', 'Female', new DateTime(), "250267257257257", "du Domaine des Terres Noires");
$father = new Repro('Gérard', 'Male', new DateTime(), "250267255255255", 'du Joux de Thor');
$litter = new Litter($mother, $father, 3, 5, 'LOF-2560-25-556', new DateTime());

// $password_crypt = password_hash('password', PASSWORD_BCRYPT);
$user->register('admin', 'admin@email.fr', 'password');



if ($pdo = $conn->connect()) {
    // Création de l'administrateur
    $pdo->exec("UPDATE `users` SET role = 'Admin' WHERE email = 'admin@email.fr'");

    // Création de la maman
    $stmt = $pdo->prepare(createRepro());
    $stmt->bindValue(':name', $mother->getName());
    $stmt->bindValue(':sex', $mother->getSex());
    $stmt->bindValue(':birthdate', '2020-01-01');
    $stmt->bindValue(':insert', $mother->getInsert());
    $stmt->bindValue(':breeder', $mother->getBreeder());
    $stmt->bindValue(':adn', $mother->getAdn());
    $stmt->bindValue(':notMyDog', 0);
    $stmt->bindValue(':mainImg', $mother->getMainImg());
    $stmt->execute();

    // Création du papa
    $stmt = $pdo->prepare(createRepro());
    $stmt->bindValue(':name', $father->getName());
    $stmt->bindValue(':sex', $father->getSex());
    $stmt->bindValue(':birthdate', '2018-02-03');
    $stmt->bindValue(':insert', $father->getInsert());
    $stmt->bindValue(':breeder', $father->getBreeder());
    $stmt->bindValue(':adn', $father->getAdn());
    $stmt->bindValue(':notMyDog', 0);
    $stmt->bindValue(':mainImg', '../../src/img/rock16-09debout3.jpg');
    $stmt->execute();

    // Création de la portée
    $stmt = $pdo->prepare(createLitter());
    $stmt->bindValue(':mother', 1);
    $stmt->bindValue(':father', 2);
    $stmt->bindValue(':birthdate', $litter->getBirthdate()->format('Y-m-d'));
    $stmt->bindValue(':numberOfPuppies', $litter->getNumberOfPuppies());
    $stmt->bindValue(':numberOfFemales', $litter->getNumberOfFemales());
    $stmt->bindValue(':numberOfMales', $litter->getNumberOfMales());
    $stmt->bindValue(':numberLof', $litter->getNumberLof());
    $stmt->bindValue(':display', $litter->getDisplay());
    $stmt->execute();

    // Création des bébés
    $litter->generatePuppiesMales();
    $litter->generatePuppiesFemales();
} else {
    echo "Erreur pendant la création des données de test";
}
