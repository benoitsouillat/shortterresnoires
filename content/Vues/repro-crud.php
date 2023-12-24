<?php
require_once('../../conn/conn.php');
require_once('../Classes/User.php');
require_once('../Classes/Repro.php');
session_start();

$user = new User();
$user->fillFromSession($_SESSION);
$user->checkRole();


$repro = new Repro();
if (isset($_GET['reproID']) && $_GET['reproID'] != null) {
    $stmt = $conn->prepare('SELECT * FROM repros WHERE id = :reproID');
    $stmt->bindParam(':reproID', $_GET['reproID']);
    $stmt->execute();
    $datas = $stmt->fetch(PDO::FETCH_OBJ);
    $repro->fillFromStdClass($datas);
    $repro->setId($_GET['reproID']);
}

if (isset($_GET['error'])) {
    $errorCode = $_GET['error'];
    $errorMessage = "";
    if ($errorCode == 23000)
        $errorMessage = "Vous ne pouvez pas supprimer ce reproducteur car il a une portée en cours !";
    else
        $errorMessage = "Une erreur s'est produite ...";
}


?>

<html lang="FR-fr">

<head>
    <title><?php echo $repro->getName() ?></title>
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
            <img src="../<?php echo $repro->getMainImg() ?>">
            <h4><?php echo $repro->getName() . ' ' . $repro->getSex() ?></h4>
            <h5><?php echo $repro->getBreeder() ?></h5>
            <p>Né(e) le :
                <?php echo $repro->getBirthdate()->format('d-m-Y') . " - ";
                if ($repro->getAdn()) {
                    echo "ADN Vérifiée ";
                }
                ?></p>
            <div class="w-100 mt-5 d-flex justify-content-center align-items-center">
                <button onClick="confirmDeleteRepro(<?php echo $repro->getId() ?>)" class="btn btn-danger">Supprimer
                    ce reproducteur</button>
            </div>
        </div>
        <div class="repro-form-container">
            <h2 class='mb-4 w-100'>
                <?php
                if ($repro->getName() != null) {
                    echo "Modifier les informations de {$repro->getName()}";
                } else {
                    echo "Créer un nouveau reproducteur";
                }
                ?>
            </h2><br>
            <form class="repro-form" method="post" action="../Controllers/repro.php" enctype="multipart/form-data">

                <?php
                if (isset($_GET['reproID']) && $_GET['reproID'] != null) {
                    echo "<input type='hidden' id='reproID' name='reproID' value='{$repro->getId()}'>";
                    echo "<input type='hidden' id='mainImg' name='mainImg' value='{$repro->getMainImg()}'>";
                }
                ?>
                <label for="reproName">Nom du chien :</label>
                <input type="text" id="reproName" name="reproName" value="<?php echo $repro->getName() ?>">

                <fieldset>
                    <input type='radio' id='Female' name='reproSex' value='Female' <?php echo ($repro->getSex() === 'Female') ? 'checked' : NULL ?>>
                    <label for='Female'> Femelle </label>
                    <input type='radio' id='Male' name='reproSex' value='Male' <?php echo ($repro->getSex() === 'Male') ? 'checked' : NULL ?>>
                    <label for="Male"> Mâle </label>
                </fieldset>

                <label for='reproBirthdate'>Date de Naissance : </label>
                <input type='date' value="<?php echo $repro->getBirthdate()->format('Y-m-d') ?>" id='reproBirthdate' name='reproBirthdate'>

                <label for='reproInsert'>Puce Electronique : </label>
                <input type="text" id="reproInsert" name="reproInsert" value="<?php echo $repro->getInsert() ?>">

                <label for="reproBreeder">Nom de l'affixe : </label>
                <input type="text" id="reproBreeder" name="reproBreeder" value="<?php echo $repro->getBreeder() ?>">

                <fieldset>ADN effectué ?
                    <input type="radio" id="ADNyes" name="reproADN" value="1" <?php echo ($repro->getAdn() == true) ? 'checked' : NULL ?>>
                    <label for="ADNyes"> Oui </label>
                    <input type="radio" id="ADNno" name="reproADN" value="0" <?php echo ($repro->getAdn() == false) ? 'checked' : NULL ?>>
                    <label for="ADNno"> Non </label>
                </fieldset>

                <label for="mainImg">Image Principale : </label>
                <input type="file" name="mainImg" id="mainImg" value="<?php echo $repro->getMainImg() ?>">

                <div class="text-center d-flex flex-row justify-content-center w-75 mt-2">
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </div>
            </form>

        </div>
    </section>

</body>
<html