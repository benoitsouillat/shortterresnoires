<?php
require_once('../Classes/User.php');
session_start();

$user = new User();
$user->fillFromSession($_SESSION);
?>
<html lang="FR-fr">

<head>
    <title>Enregistrement</title>
    <?php
    include_once "../php/head.php";
    ?>
</head>

<body>
    <section>
        <h1 class="text-center">Bienvenue Administrateur <?php echo $user->getUsername(); ?></h1>
    </section>

</body>

</html>