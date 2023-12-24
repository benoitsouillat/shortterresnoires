<?php
require_once('../Classes/User.php');
require_once('../Classes/Repro.php');
require_once('../Classes/Litter.php');
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
            var_dump($puppy->getLitter());
            echo "<div class='puppy-litter-container'><h3>Portée de {$puppy->getLitter()->getMother()->getName()} et {$puppy->getLitter()->getFather()->getName()} - N° {$puppy->getLitter()->getNumberLof()}</h3></div>
            ";
        }
        ?>
    </section>

    <section class="puppies-container">
        <div class="puppy-litter-container">
            <h3>Portée de Okkaina et Paco - N° 356892°-62-2020</h3>
            <div class="puppy-card">
                <div class="card-top">
                    <h4>Male N°1</h4>
                    <div>
                        <p class="avail-zone available">Disponible</p>
                        <p class="necklace">Collier Rouge</p>
                    </div>
                </div>
                <div class="card-info">
                    <img src="../../src/img/Banniere_elevage.jpg" alt="ban">
                </div>
                <div class="button-zone">
                    <a href="" class="btn btn-primary">Modifier</a>
                </div>
            </div>
        </div>
    </section>

</body>

</html>