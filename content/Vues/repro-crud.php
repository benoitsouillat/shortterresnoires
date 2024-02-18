<?php
require_once(__DIR__ . '/../Classes/User.php');
require_once(__DIR__ . '/../Classes/Repro.php');
require_once(__DIR__ . '/../Classes/Image.php');
require_once(__DIR__ . '/../Models/sql/images_request.php');
session_start();

$user = new User();
$user->fillFromSession($_SESSION);
$user->checkRole();

$pdo = new RequestPDO();
$repro = new Repro();

if (isset($_GET['reproID']) && $_GET['reproID'] != null) {
    $stmt = $pdo->connect()->prepare('SELECT * FROM repros WHERE id = :reproID');
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
            <h3>Infos en ligne :</h3><br>
            <img src="../<?php echo $repro->getMainImg() ?>">
            <h4><?php echo $repro->getName() . ' ' . $repro->getSex() ?></h4>
            <h5><?php echo $repro->getBreeder() ?></h5>
            <p>Né(e) le :
                <?php echo $repro->getBirthdate()->format('d-m-Y') . " <br>";
                if ($repro->getAdn()) {
                    echo "<br>ADN Vérifiée ";
                }
                if ($repro->getNotMyDog() == true) {
                    echo "<br>Reproducteur extérieur";
                }
                ?></p>
            <div class="diapo-img-container">
                <?php
                $pdo = new RequestPDO();
                $stmt = $pdo->connect()->prepare(getAllImagesFromReproId());
                $stmt->bindValue(':reproID', $repro->getId());
                $stmt->execute();
                $diapoData = $stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($diapoData as $diapo) {
                    $image = new Image();
                    $image->fillFromStdClass($diapo);
                    echo "
                    <div class='diapo-elm'>
                    <img src={$image->getPath()} alt={$repro->getName()} >
                    <a class='deleteDiapo' onClick=\"confirmDeleteDiapo({$image->getImageId()},{$repro->getId()},'repro')\"><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#dc3545' class='bi bi-x-circle-fill' viewBox='0 0 16 16'>
                    <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z'/>
                  </svg></a>
                  </div>";
                }

                ?>

            </div>
            <div class="button-zone">
                <button onClick="confirmDeleteRepro(<?php echo $repro->getId() ?>)" class="btn btn-danger">Supprimer
                    ce reproducteur</button>
            </div>
        </div>
        <div class="repro-form-container">
            <h2>
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
                <input type="text" id="reproName" name="reproName" value="<?php echo $repro->getName() ?>" required>

                <fieldset>
                    <input type='radio' id='Female' name='reproSex' value='Female' <?php echo ($repro->getSex() === 'Female') ? 'checked' : NULL ?>>
                    <label for='Female'> Femelle </label>
                    <input type='radio' id='Male' name='reproSex' value='Male' <?php echo ($repro->getSex() === 'Male') ? 'checked' : NULL ?>>
                    <label for="Male"> Mâle </label>
                </fieldset>

                <label for='reproBirthdate'>Date de Naissance : </label>
                <input type='date' value="<?php echo $repro->getBirthdate()->format('Y-m-d') ?>" id='reproBirthdate' name='reproBirthdate' required>

                <label for='reproInsert'>Puce Electronique : </label>
                <input type="text" id="reproInsert" name="reproInsert" value="<?php echo $repro->getInsert() ?>" required>

                <label for="reproBreeder">Nom de l'affixe : </label>
                <input type="text" id="reproBreeder" name="reproBreeder" value="<?php echo $repro->getBreeder() ?>">

                <fieldset class="adn-field">
                    <label for="reproADN"> ADN effectuée </label>
                    <input type="checkbox" id="reproADN" name="reproADN" value="1" <?php echo ($repro->getAdn() == true) ? 'checked' : NULL ?>>
                </fieldset>

                <fieldset class="notmydog-field">
                    <label for="notMyDog"> Reproducteur extérieur </label>
                    <input type="checkbox" id="notMyDog" name="notMyDog" value="1" <?php echo ($repro->getNotMyDog() == true) ? 'checked' : NULL ?>>
                </fieldset>

                <label for="mainImg">Image Principale : </label>
                <input type="file" name="mainImg" id="mainImg" value="<?php echo $repro->getMainImg() ?>">

                <label for="diapoImg[]">Ajouter au diaporama</label>
                <input type="file" name="diapoImg[]" id="diapoImg" multiple>

                <div class="text-center d-flex flex-row justify-content-center w-75 mt-2">
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </div>
            </form>

        </div>
    </section>

</body>
<html