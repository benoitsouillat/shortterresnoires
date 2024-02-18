<?php
session_start();
require_once('../Classes/User.php');

$user = new User();
$user->fillFromSession($_SESSION);
$user->checkRole();
?>
<html lang="FR-fr">

<head>
    <title>Administration</title>
    <?php
    include_once "../php/head.php";
    ?>
</head>

<body>
    <section>
        <h1 class="text-center">Bienvenue Administrateur <?php echo $user->getUsername(); ?></h1>
        <?php include_once('../Vues/admin_nav.php'); ?>
    </section>
</body>

</html>