<?php
require_once('../Classes/User.php');
require_once('../Classes/Repro.php');
session_start();

$user = new User();
$user->fillFromSession($_SESSION);
$user->checkRole();

?>
<html lang="FR-fr">

<head>
    <title>Reproducteurs</title>
    <?php
    include_once(__DIR__ . "/../php/head.php");

    ?>
    <link rel="stylesheet" type="text/css" href="../../css/admin/main.css">
</head>

<body>
    <section>
        <?php include_once('../Vues/admin_nav.php'); ?>
        <h1>Liste des Reproducteurs</h1>

        <div class="order-container">
            <a href="./repro-crud.php" class="btn-sm btn-primary">Créer un Reproducteur</a><br>
            <a href="?order=malefirst" class="btn-sm btn-beige">Trier par Mâles</a>
            <a href="?order=femalefirst" class="btn-sm btn-beige">Trier par Femelles</a>
            <!-- <a href="?order=maleonly" class="btn-sm btn-beige">Voir les Mâles</a>
            <a href="?order=femaleonly" class="btn-sm btn-beige">Voir les Femelles</a> -->
            <?php
            if (isset($_GET['order']) && ($_GET['order'] == 'mydog')) {
                echo "<a href='?order=femalefirst' class='btn-sm btn-beige'>Voir tous les chiens</a>";
            } else {
                echo " <a href='?order=mydog' class='btn-sm btn-beige'>Voir mes chiens</a>";
            }
            ?>

        </div>

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
            <a href='./repro-crud.php?reproID={$repro->getId()}'><span  ";
            if ($repro->getSex() == 'Male') {
                echo "class='male-color";
            } else {
                echo "class='female-color";
            }
            if ($repro->getNotMyDog() == true) {
                echo " bi bi-caret-left "; // Mettre un icone pour les chiens hors elevage voir Bootstrap
            }

            echo "'> {$repro->getName()}</span></a>
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
</body>

</html>