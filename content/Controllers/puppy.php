<?php
if (empty($_SESSION)) {
    session_start();
}
require_once('../Classes/RequestPDO.php');
require_once('../Classes/Puppy.php');
require_once('../Classes/User.php');


$user = new User();
$user->fillFromSession($_SESSION);
// $user->setEmail('admin@email.fr');
// $user->setRole('Admin');
$user->checkRole();

$pdo = new RequestPDO();
$puppy = new Puppy();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $puppy->fillFromPost();
    $puppy->checkMainImg();
    $puppy->saveDiapoImg();

    if ($puppy->getId() > 0) {
        $puppy->fetchToDatabase();
    }
}

header('Location:../Vues/puppies.php');
