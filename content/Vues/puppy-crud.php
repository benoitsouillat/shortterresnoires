<?php
require_once('../Classes/User.php');
require_once('../Classes/Puppy.php');
require_once('../Classes/RequestPDO.php');
session_start();
$user = new User();
$user->fillFromSession($_SESSION);
$user->checkRole();

$puppy = new Puppy();
if (isset($_GET['puppyID']) && $_GET['puppyID'] > 0) {
    $puppy->fetchFromDatabase($_GET['puppyID']);
}
?>

<html lang="FR-fr">

<head>
    <title><?php echo $puppy->getName() ?></title>
    <?php
    include_once "../php/head.php";

    ?>
    <link rel="stylesheet" type="text/css" href="../../css/admin/main.css">
    <script src="../assets/confirm.js" type="text/javascript"></script>
</head>

<body>
    <?php include_once('../Vues/admin_nav.php'); ?>

    <?php
    if (isset($_GET['error'])) {
        echo "<div class='error-div w-100 p-5 m-2'><p class='w-100 text-center'>{$errorMessage}</p></div>
        ";
    }
    ?>
    <section class="section-repro">
        <div class="infos-repro">
            <h3 class="w-100 text-center mt-5 mb-5">Infos en ligne :</h3><br>
            <img src="../<?php echo $puppy->getMainImg() ?>">
            <h4 class="text-center"><?php echo $puppy->getName() . ' -  ' . $puppy->getSex() ?></h4>
            <p class="text-center">Né(e) le :
                <?php echo $puppy->getLitter()->getBirthdate()->format('d-m-Y');
                ?></p>
            <p><?php echo $puppy->getAvailable() ?></p>
            <p class="text-center">
                <?php echo "Issu de {$puppy->getLitter()->getMother()->getName()} et de {$puppy->getLitter()->getFather()->getName()}"; ?>
            </p>
            <!-- <div class="w-100 mt-5 d-flex justify-content-center align-items-center">
                <button onClick="confirmDeletePuppy()" class="btn btn-danger">Supprimer
                    ce chiot</button>
            </div> -->
        </div>
        <div class="repro-form-container">
            <h2 class='mb-4 w-100'>
                <?php
                if ($puppy->getName() != null) {
                    echo "Modifier les informations de {$puppy->getName()}";
                } else {
                    echo "Créer un nouveau reproducteur";
                }
                ?>
            </h2><br>
            <form class="repro-form" method="post" action="../Controllers/puppy.php" enctype="multipart/form-data">

                <?php
                if (isset($_GET['puppyID']) && $_GET['puppyID'] != null) {
                    echo "<input type='hidden' id='puppyID' name='puppyID' value='{$puppy->getId()}'>";
                    echo "<input type='hidden' id='mainImg' name='mainImg' value='{$puppy->getMainImg()}'>";
                    echo "<input type='hidden' id='litter' name='litter' value='{$puppy->getlitter()->getId()}'>";
                }
                ?>
                <label for="puppyName">Nom du chiot :</label>
                <input type="text" id="puppyName" name="puppyName" value="<?php echo $puppy->getName() ?>">

                <label for="puppyColor">Couleur du chiot :</label>
                <input type="text" id="puppyColor" name="puppyColor" value="<?php echo $puppy->getColor() ?>">

                <select id="puppyAvailable" name="puppyAvailable">
                    <option value="Disponible" <?php echo ($puppy->getAvailable() === 'Disponible' ? 'selected' : '') ?>>Disponible</option>
                    <option value="Option" <?php echo ($puppy->getAvailable() === 'Option' ? 'selected' : '') ?>>Option
                    </option>
                    <option value="Réservé" <?php echo ($puppy->getAvailable() === 'Réservé' ? 'selected' : '') ?>>
                        Réservé</option>
                </select>

                <label for="mainImg">Image Principale : </label>
                <input type="file" name="mainImg" id="mainImg" value="<?php echo $puppy->getMainImg() ?>">

                <div class="text-center d-flex flex-row justify-content-center w-75 mt-2">
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </div>
            </form>

        </div>
    </section>

</body>
<html