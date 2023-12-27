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

        foreach ($puppiesShow as $puppies) {
            if (isset($puppies[0])) {
                echo "<div class='puppy-litter-container'><h3>Portée de {$puppies[0]->getLitter()->getMother()->getName()} et de {$puppies[0]->getLitter()->getFather()->getName()} - N° {$puppies[0]->getLitter()->getNumberLof()}</h3>
                <div class='cards-container'>";
            }
            foreach ($puppies as $puppy) {
                echo "
                    <div class='puppy-card'>
                        <div class='card-top'>
                            <h4><a href='../Vues/puppy-crud.php?puppyID={$puppy->getId()}'>{$puppy->getName()}</a></h4>
                            <div>
                                <p class='avail-zone {$puppy->getAvailable()}'>{$puppy->getAvailable()}</p>
                                <p class='necklace'>{$puppy->getNecklace()}</p>
                            </div>
                        </div>
                        <div class='card-info'>
                        <a href='../Vues/puppy-crud.php?puppyID={$puppy->getId()}'><img src='{$puppy->getMainImg()}' alt='{$puppy->getName()}'></a>
                        </div>
                        <div class='button-zone'>
                            <a href='../Vues/puppy-crud.php?puppyID={$puppy->getId()}' class='btn btn-primary'>Modifier</a>
                        </div>
                    </div>";
            }
            echo "</div>";
        }
        ?>
    </section>
</body>

</html>