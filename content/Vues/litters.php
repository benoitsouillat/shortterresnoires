<?php
// require_once('../../conn/conn.php');
require_once('../Classes/User.php');
require_once('../Classes/Repro.php');
require_once('../Classes/Litter.php');
session_start();

$user = new User();
$user->fillFromSession($_SESSION);
if ($user->checkRole() === false) {
    echo 'Pas le bon role !!';
    header('Location:./logout.php');
}
?>
<html lang="FR-fr">

<head>
    <title>Portées Gestion</title>
    <?php
    include_once "../php/head.php";

    ?>
    <link rel="stylesheet" type="text/css" href="../../css/admin/main.css">
</head>

<body>
    <?php include_once('../Vues/admin_nav.php'); ?>
    <h1>Les portées</h1>
    <?php
    include_once('../Models/litters.php');
    foreach ($litters as $data) {
        $litter = new Litter();
        $mother = new Repro();
        $data->mother = $mother->fetchFromDatabase($conn, $data->mother);
        $father = new Repro();
        $data->father = $father->fetchFromDatabase($conn, $data->father);

        $litter->fillFromStdClass($data);


        echo "            
        <div class='repro-line'>
            <div class='image-space'>
                <a href='./litter-crud.php?litterID={$litter->getId()}'><img src=../{$litter->getMother()->getMainImg()} alt={$litter->getMother()->getName()}></a>
            </div>
            <a href='./litter-crud.php?litterID={$litter->getId()}'><span class='fa'> {$litter->getMother()->getName()} et {$litter->getFather()->getName()}</span></a>
            <p>Nés le : {$litter->getBirthdate()->format('d-m-Y')}</p></div>";
    }
    ?>
    </div>
    <div><a href="./litter-crud.php" class="btn btn-warning">Créer une Portée</a></div>

</body>

</html>