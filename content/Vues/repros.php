<?php
require_once('../Classes/User.php');
require_once('../Classes/Repro.php');
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
    <title>Reproducteurs</title>
    <?php
    include_once "../php/head.php";

    ?>
    <link rel="stylesheet" type="text/css" href="../../css/admin/main.css">
</head>

<body>
    <section>
        <?php include_once('../Vues/admin_nav.php'); ?>
        <h1>Liste des Reproducteurs</h1>
        <?php
        include_once('../Models/repros.php');
        foreach ($repros as $data) {
            $repro = new Repro();
            $repro->fillFromStdClass($data);
            echo "            
            <div class='repro-line'>
            <div class='image-space'>
            <a href='./repro-crud.php?reproID={$repro->getId()}'><img src=../{$repro->getMainImg()} alt={$repro->getName()}></a>
            </div>
            <a href='./repro-crud.php?reproID={$repro->getId()}'><span class='fa'> {$repro->getName()}</span></a>
            <p>{$repro->getBreeder()}</p>
            <p>";
            $today = date('Y-m-d');
            $diff = date_diff(date_create($repro->getBirthdate()->format('Y-m-d')), date_create($today));
            echo $diff->format('%y') . " Ans</p>
            <a href='./repro-crud.php?reproID={$repro->getId()}' class='btn btn-primary'>Modifier</a>
        </div>";
        }
        ?>
    </section>
    <div><a href="./repro-crud.php" class="btn btn-primary">Créer un Reproducteur</a></div>
</body>

</html>