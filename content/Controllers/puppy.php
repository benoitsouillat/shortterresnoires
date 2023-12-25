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
    if ($puppy->getId() > 0) {
        $puppy->fetchToDatabase();
    } else {
        $puppy->createToDatabase();
    }
}


header('Location:../Vues/puppies.php');
