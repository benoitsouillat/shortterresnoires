<?php
require_once('../Classes/User.php');
session_start();

$user = new User();
$user->fillFromSession($_SESSION);
$user->checkRole();

?>
<html lang="FR-fr">

<head>
    <title>Suppression d'une portée</title>
    <?php
    include_once "../php/head.php";

    ?>
    <link rel="stylesheet" type="text/css" href="../../css/admin/main.css">
</head>

<body>
    <?php include_once('../Vues/admin_nav.php'); ?>
    <?php include_once('../Classes/Litter.php');
    include_once('../Classes/RequestPDO.php');
    $pdo = new RequestPDO();
    $litter = new Litter();
    $stmt = $pdo->connect()->prepare(getLitterFromId());
    $stmt->bindValue(':litterId', $_GET['litterID']);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_OBJ);
    $litter->fillFromStdClass($data);
    ?>
    <section class="puppies-container">
        <h1>Vous êtes sur le point de détruire la portée de : <?php echo $litter->getMother()->getName() ?></h1>
        <h2>La Suppression est irréversible et entrainera la suppression de tous les chiots associés à la portée :
            <?php echo $litter->getNumberLof() ?></h2>
        <p>Voulez-vous continuer ?</p>
        <a href=<?php echo "../Controllers/litter.php?litterID=" . $litter->getId() . "&delete=true"; ?>
            class="btn btn-danger">Oui
            Supprimer</a>
        <a href="../Vues/litters.php" class="btn btn-dark">Non ! Retourner aux portées </a>
    </section>