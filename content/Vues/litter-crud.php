<?php
require_once('../../conn/conn.php');
require_once('../Classes/User.php');
require_once('../Classes/Litter.php');
require_once('../Models/sql/litter_request.php');
session_start();

$user = new User();
$user->fillFromSession($_SESSION);
if ($user->checkRole() === false) {
    echo 'Pas le bon role !!';
    header('Location:./logout.php');
}

$litter = new litter();
if (isset($_GET['litterID']) && $_GET['litterID'] != null) {
    $stmt = $conn->prepare(getLitterFromId());
    $stmt->bindParam(':litterId', $_GET['litterID']);
    $stmt->execute();
    $datas = $stmt->fetch(PDO::FETCH_OBJ);

    $mother = new Repro();
    $datas->mother = $mother->fetchFromDatabase($conn, $datas->mother);
    $father = new Repro();
    $datas->father = $father->fetchFromDatabase($conn, $datas->father);

    $litter->fillFromStdClass($datas);
    $litter->setId($_GET['litterID']);
} else {
    $litter->setId(0);
}

$stmtMales = $conn->prepare(getAllMalesRepro());
$stmtMales->execute();
$males = $stmtMales->fetchAll(PDO::FETCH_ASSOC);

$stmtFemales = $conn->prepare(getAllFemalesRepro());
$stmtFemales->execute();
$females = $stmtFemales->fetchAll(PDO::FETCH_ASSOC);

?>

<html lang="FR-fr">

<head>
    <title><?php echo ($litter->getMother() != NULL) ? $litter->getMother()->getName() : "Création d'une portée" ?>
    </title>
    <?php
    include_once "../php/head.php";

    ?>
    <link rel="stylesheet" type="text/css" href="../../css/admin/main.css">
    <script src="../assets/confirm.js" type="text/javascript"></script>
</head>

<body>
    <?php include_once('../Vues/admin_nav.php'); ?>

    <section class="section-repro">
        <?php if ($litter->getMother() != NULL) {
        ?>
            <div class="infos-repro">
                <h3>Infos de la portée en ligne : </h3>
                <?php echo "<h4> Portée de {$litter->getMother()->getName()} et {$litter->getFather()->getName()}, née le {$litter->getBirthdate()->format('d-m-Y')} .</h1>" ?>

                <div class="parents-container">
                    <div class="mother-container">
                        <?php echo "<img src='{$litter->getMother()->getMainImg()}' alt='{$litter->getMother()->getName()}'" ?>
                        <?php echo "<p> {$litter->getMother()->getName()}</p>" ?>
                    </div>
                    <div class="father-container">
                        <?php echo "<img src='{$litter->getFather()->getMainImg()}' alt='{$litter->getFather()->getName()}'" ?>
                        <?php echo "<p> {$litter->getFather()->getName()}</p>" ?>
                    </div>
                </div>
                <div class="litter-infos-container">
                    <?php echo "<p>{$litter->getNumberOfFemales()} femelle(s) et {$litter->getNumberOfMales()} mâle(s)</p>"; ?>
                    <?php echo "<p>{$litter->getNumberOfPuppies()} chiot(s) né(s) le {$litter->getBirthdate()->format('d-m-Y')} </p>"; ?>
                </div>
                <div class="w-100 mt-5 d-flex justify-content-center align-items-center">
                    <button onClick="confirmDeleteLitter(<?php echo $litter->getId() ?>)" class="btn btn-danger">Supprimer
                        cette portée</button>
                </div>
            </div>
        <?php
        };
        ?>

        <div class="repro-form-container">
            <h2><?php echo 'Portée N° : ' . $litter->getNumberLof() ?></h2>
            <form class="repro-form" method='post' action="../Controllers/litter.php">
                <input type="hidden" name="litterID" value="<?php echo $litter->getId() ?>">
                <fieldset>
                    <legend>Mariage de </legend>
                    <select name='mother'>
                        <?php
                        foreach ($females as $female) {
                            echo "<option value='{$female['id']}'>{$female['name']}</option>";
                        }
                        echo "</select> et de <select name='father'>";
                        foreach ($males as $male) {
                            echo "<option value='{$male['id']}'>{$male['name']}</option>";
                        }
                        ?>
                    </select>
                </fieldset>


                <label for="birthdate">Date de naissance</label>
                <input type="date" name="birthdate" id="birthdate" value="<?php echo $litter->getBirthdate()->format('Y-m-d') ?>">

                <label for="numberLof">Numéro de portée</label>
                <input type="text" name="numberLof" id="numberLof" value="<?php echo $litter->getNumberLof() ?>">

                <fieldset class="litter-infos-puppies">
                    <legend>Infos sur les chiots <br><i>(Modifier cette valeur peut entraîner un effacement des données
                            déjà
                            existantes)</i></legend>
                    <label for="numberOfPuppies">Nombre de chiots : </label>
                    <input name="numberOfPuppies" id="numberOfPuppies" type="number" value="<?php echo $litter->getNumberOfPuppies() ?>">
                    <fieldset>
                        <label for="numberOfPuppies">Mâles : </label>
                        <input name="numberOfMales" id="numberOfMales" type="number" value="<?php echo $litter->getNumberOfMales() ?>">
                        <label for="numberOfPuppies">Femelles : </label>
                        <input name="numberOfFemales" id="numberOfFemales" type="number" value="<?php echo $litter->getNumberOfFemales() ?>">
                    </fieldset>
                </fieldset>


                <button class="btn btn-success" type="submit">Enregistrer</button>

            </form>
        </div>
    </section>
</body>

</html>