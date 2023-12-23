<?php
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
    <title>Gestion des bébés</title>
    <?php
    include_once "../php/head.php";

    ?>
    <link rel="stylesheet" type="text/css" href="../../css/admin/main.css">
</head>

<body>
    <?php include_once('../Vues/admin_nav.php'); ?>
</body>

</html>