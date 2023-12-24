<?php
require_once('../Classes/User.php');
session_start();

$user = new User();
$user->fillFromSession($_SESSION);
$user->checkRole();

?>
<html lang="FR-fr">

<head>
    <title>Gestion des bébés</title>
    <?php
    include_once "../php/head.php";

    ?>
    <link rel="stylesheet" type="text/css" href="../../css/admin/main.css">
</head>

<body>
    <?php include_once('../Vues/admin_nav.php'); ?>
    <?php include_once('../Models/puppies.php'); ?>
    <?php include_once('../Classes/RequestPDO.php'); ?>
    <section class="puppies-container">
        <?php

        foreach ($puppies as $puppy) {
            echo "<div class='puppy-litter-container'><h3>Portée de {$puppy->getLitter()->getMother()->getName()} et {$puppy->getLitter()->getFather()->getName()} - N° {$puppy->getLitter()->getNumberLof()}</h3>
            <div class='puppy-card'>
                <div class='card-top'>
                    <h4>{$puppy->getName()}</h4>
                    <div>
                        <p class='avail-zone {$puppy->getAvailable()}'>{$puppy->getAvailable()}</p>
                        <p class='necklace'>{$puppy->getNecklace()}</p>
                    </div>
                </div>
                <div class='card-info'>
                    <img src='{$puppy->getMainImg()}' alt='{$puppy->getName()}'>
                </div>
                <div class='button-zone'>
                <a href='../Vues/puppy-crud.php?puppyID={$puppy->getId()}' class='btn btn-primary'>Modifier</a>
            </div>
            </div>
            ";
        }
        ?>
    </section>
</body>

</html>