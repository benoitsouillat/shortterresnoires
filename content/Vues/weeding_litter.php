<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">

    <title>Les Terres Noires</title>

    <?php
    include_once(__DIR__ . '/../php/head.php');
    require_once(__DIR__ . '/../Classes/RequestPDO.php');
    require_once(__DIR__ . '/../Classes/Litter.php');
    require_once(__DIR__ . '/../Controllers/function.php');
    require_once(__DIR__ . '/../Classes/Puppy.php');

    $pdo = new RequestPDO();
    $stmt = $pdo->connect()->prepare(getLitterFromId());
    $stmt->bindValue(':litterId', $_GET['litterID']);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_OBJ);
    $litter = new Litter();
    $litter->fillFromStdClass($data);
    $stmt = $pdo->connect()->prepare(getAllPuppiesOrderLitterMales());
    $stmt->bindValue(':litterID', $_GET['litterID']);
    $stmt->execute();
    $puppiesData = $stmt->fetchAll(PDO::FETCH_OBJ);

    ?>

    <!-- Favicon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- fontAwesome Icon -->
    <script src="https://kit.fontawesome.com/5944b63bf2.js" crossorigin="anonymous"></script>
    <script src="/content/assets/slider.js" crossorigin="anonymous"></script>
    <script>
        window.onload = () => {
            slider()
        };
    </script>

</head>

<body id="puppy-page">
    <header id="header">
        <?php echo "<h1 class='title'>{$litter->getMother()->getName()} et {$litter->getFather()->getName()}</h1>" ?>
        <nav id="nav">
            <?php
            include_once(__DIR__ . '/../php/navbar.php');
            ?>
        </nav>
    </header>
    <main>
        <section class="puppy-para">
            <?php
            echo "        <p><i>Portée née le :" . trad_month($litter->getBirthdate()->format(' d F Y ')) . "<br>
        N° Portée : {$litter->getNumberLof()} <br>
        Insert de la mère : {$litter->getMother()->getInsert()} </i></p>";
            ?>
            <p class="para-right">
                <a class="btn btn-dark btn-sm" href="/content/ourdog.php" style="margin-right: 15px;">Voir les
                    parents</a>
                <a class="btn btn-info btn-sm" href="#price" alt="Prix des chiots">Voir les prix</a>
            </p>
        </section>
        <section id="puppies">
            <div id="puppiesTab">
                <?php
                foreach ($puppiesData as $data) {
                    $puppy = new Puppy();
                    $data->id = $data->puppyID;
                    $puppy->fillFromStdClass($data);
                    echo "
                <div class='puppy__card " . ($puppy->getSex() === 'Male' ? 'puppy_male' : 'puppy_female') . "'>
                <div class='puppy_info-align'>
                <p class='puppy_info-align_dogname'>{$puppy->getName()}</p>
                    <p class='fa " . ($puppy->getSex() === 'Male' ? 'fa-mars' : 'fa-venus') . "' aria-hidden='true'> 
                    ";
                    echo ($puppy->getSex() === 'Male') ? 'Mâle' : 'Femelle';
                    echo "
                    </p>
                    <p>Collier {$puppy->getNecklace()}</p>
                    <p>Couleur : {$puppy->getColor()}</p>";
                    if ($puppy->getAvailable() === 'Disponible') {
                        echo "<button class='btn-avail btn-sm btn-dispo'>Disponible</button>";
                    } elseif ($puppy->getAvailable() === 'Option') {
                        echo "<button class='btn-avail btn-sm btn-option'>En option</button>";
                    } else {
                        echo "<button class='btn-avail btn-sm btn-undispo'>Réservé</button>";
                    }
                    echo "<p class='price'>Prix : {$puppy->getPrice()}€ </p>";

                    $stmt = $pdo->connect()->prepare("SELECT * FROM `diapos` WHERE puppyID = :puppyID");
                    $stmt->bindValue(':puppyID', $puppy->getId());
                    $stmt->execute();
                    $imagesData = $stmt->fetchAll(PDO::FETCH_OBJ);

                    echo "
                </div>
                <div class='diapo-container' data-dog-id={$puppy->getId()}> 
                <div class='diapo diapo-{$puppy->getId()}'>
                <img src='{$puppy->getMainImg()}' alt='Chiot Cane Corso {$puppy->getName()}' loading='lazy'>";
                    if ($imagesData != false) {
                        // Arrow Left
                        foreach ($imagesData as $data) {
                            echo "<img src='{$data->path}' alt='Image Cane Corso' loading='lazy'>";
                        }

                        echo "<img src='{$puppy->getMainImg()}' alt='Chiot Cane Corso {$puppy->getName()}' loading='lazy'></div></div>";
                        //Arrow Right
                        echo "<div class='arrow-div'>
                                <button class='left-arrow bg-transparent'>
                                    <span class='bi bi-caret-left bi-caret-left-{$puppy->getId()} text-light'></span>
                                </button>
                                <button class='right-arrow bg-transparent'>
                                    <span class='bi bi-caret-right bi-caret-right-{$puppy->getId()} text-light'></span>
                                </button>
                            </div>";
                    } else {
                        echo "</div></div>";
                    }
                    echo "
            </div>
                ";
                }
                ?>
            </div>
        </section>
        <!-- <section class="puppy-para">
            <br>
            <i>
                <p id="price">Le prix d'un chiot de cette portée est fixé à 1200€ pour un mâle ou une femelle</p>
                <p>Un acompte de 300€ vous sera demandé à la réservation du chiot,
                    ainsi qu'une attestation de réservation remplie et signée</p>
                <p>Merci de votre compréhension </p>
            </i>
            <br>
        </section> -->
    </main>

    <?php
    include_once(__DIR__ . "/../php/footer.php");
    ?>


</body>

</html>