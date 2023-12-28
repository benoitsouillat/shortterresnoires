<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <title>Les Mariages du domaine des Terres Noires</title>
    <?php
    include_once(__DIR__ . "/../php/head.php");
    ?>

</head>

<body id="weeding-page">
    <header id="header">
        <h1 class="title">Nos Mariages</h1>
        <nav id="nav">
            <?php
            include_once(__DIR__ . "/../php/navbar.php");
            require_once(__DIR__ . '/../Classes/RequestPDO.php');
            require_once(__DIR__ . '/../Classes/Litter.php');
            require_once(__DIR__ . '/../Controllers/function.php');

            $pdo = new RequestPDO();
            $stmt = $pdo->connect()->prepare(getAllActiveLitters());
            $stmt->execute();
            $littersData = $stmt->fetchAll(PDO::FETCH_OBJ);
            ?>
        </nav>
    </header>
    <main>
        <section id="weedings">
            <?php
            foreach ($littersData as $data) {
                $litter = new Litter();
                $litter->fillFromStdClass($data);
                echo "
                <div class='div-weeding'>
                <section class='female-weeding'>
                    <div class='txt-weeding'>
                        <h3>{$litter->getMother()->getName()}</h3>
                        <p>née le : " . trad_month($litter->getMother()->getBirthdate()->format(' d F Y ')) . "</p>
                        <p>Issue {$litter->getMother()->getBreeder()}</p>
                    </div>
                    <div class='img-weeding'><img src={$litter->getMother()->getMainImg()} alt='{$litter->getMother()->getName()}'></div>
                </section>
                <section class='male-weeding'>
                <div class='txt-weeding'>
                    <h3>{$litter->getFather()->getName()}</h3>
                    <p>né le : " . trad_month($litter->getFather()->getBirthdate()->format(' d F Y ')) . "</p>
                    <p>Issu {$litter->getFather()->getBreeder()}</p>
                </div>
                <div class='img-weeding'><img src='{$litter->getFather()->getMainImg()}' alt='{$litter->getFather()->getName()}'></div>
            </section>
            </div>
            
            <div class='weeding-baby'>
            <a href='weeding_litter.php?litterID={$litter->getId()}' role='button' class='btn btn-beige btn-lg btn__anim'>Voir les bébés</a>
            </div>
            <h5 class='date-weeding'>Chiots nés le " . trad_month($litter->getBirthdate()->format(' d F Y ')) . "</h5>
            <hr class='separate-weeding'>
                ";
            }
            ?>
        </section>
    </main>

    <?php
    include_once(__DIR__ . "/../php/footer.php");
    ?>


</body>

</html>