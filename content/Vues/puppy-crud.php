<?php
session_start();
require_once('../Classes/User.php');
require_once('../Classes/Puppy.php');
require_once('../Classes/RequestPDO.php');
require_once('../Models/sql/images_request.php');
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
            <img class="<?php echo 'border-' . $puppy->getAvailable(); ?>" src="../<?php echo $puppy->getMainImg() ?>">
            <h4 class="text-center"><?php echo $puppy->getName() . ' -  ' . $puppy->getSex() ?></h4>
            <p class="text-center">Né(e) le :
                <?php echo $puppy->getLitter()->getBirthdate()->format('d-m-Y');
                ?></p>
            <p class="<?php echo $puppy->getAvailable(); ?>">
                <?php echo $puppy->getAvailable(); ?>
            </p>
            <p class=" text-center">
                <?php echo "Issu de {$puppy->getLitter()->getMother()->getName()} et de {$puppy->getLitter()->getFather()->getName()}"; ?>
            </p>
            <!-- <div class="w-100 mt-5 d-flex justify-content-center align-items-center">
                <button onClick="confirmDeletePuppy()" class="btn btn-danger">Supprimer
                    ce chiot</button>
            </div> -->
            <div class="diapo-img-container">
                <?php
                $pdo = new RequestPDO();
                $stmt = $pdo->connect()->prepare(getAllImagesFromPuppyId());
                $stmt->bindValue(':puppyID', $puppy->getId());
                $stmt->execute();
                $diapoData = $stmt->fetchAll(PDO::FETCH_OBJ);
                foreach ($diapoData as $diapo) {
                    $image = new Image();
                    $image->fillFromStdClass($diapo);
                    echo "
                    <div class='diapo-elm'>
                    <img src={$image->getPath()} alt={$puppy->getName()} >
                    <a class='deleteDiapo' onClick=\"confirmDeleteDiapo({$image->getImageId()},{$puppy->getId()},'puppy')\"><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='#dc3545' class='bi bi-x-circle-fill' viewBox='0 0 16 16'>
                    <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z'/>
                  </svg></a>
                  </div>";
                }

                ?>

            </div>
        </div>
        <div class="repro-form-container">
            <h2 class=' mb-4 w-100'>
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
                    echo "<input type='hidden' id='puppySex' name='puppySex' value='{$puppy->getSex()}'>";
                    echo "<input type='hidden' id='litter' name='litter' value='{$puppy->getlitter()->getId()}'>";
                }
                ?>
                <label for="puppyName">Nom du chiot :</label>
                <input type="text" id="puppyName" name="puppyName" value="<?php echo $puppy->getName() ?>" required>

                <label for="puppyColor">Couleur du chiot :</label>
                <input type="text" id="puppyColor" name="puppyColor" value="<?php echo $puppy->getColor() ?>" required>

                <label for="puppyNecklace">Couleur du collier :</label>
                <input type="text" id="puppyNecklace" name="puppyNecklace" value="<?php echo $puppy->getNecklace() ?>">

                <select id="puppyAvailable" name="puppyAvailable">
                    <option value="Disponible" class="disponible"
                        <?php echo ($puppy->getAvailable() === 'Disponible' ? 'selected' : '') ?>>Disponible --
                    </option>
                    <option value="Option" class="option"
                        <?php echo ($puppy->getAvailable() === 'Option' ? 'selected' : '') ?>>Option --
                    </option>
                    <option value="Réservé" class="réservé"
                        <?php echo ($puppy->getAvailable() === 'Réservé' ? 'selected' : '') ?>>
                        Réservé --</option>
                </select>

                <label for="mainImg">Image Principale : </label>
                <input type="file" name="mainImg" id="mainImg" value="<?php echo $puppy->getMainImg() ?>">

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