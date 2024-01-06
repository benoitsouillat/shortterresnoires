<html lang="FR-fr">

<head>
    <title>Nos reproducteurs - Le domaine des terres noires</title>
    <link rel="stylesheet" href="../fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
    <link rel="stylesheet" href="../fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css"
        media="screen" />
    <script src="https://kit.fontawesome.com/5944b63bf2.js" crossorigin="anonymous"></script>
    <?php
    include_once(__DIR__ . "/php/head.php");
    require_once(__DIR__ . "/Classes/Repro.php");
    require_once(__DIR__ . "/Classes/RequestPDO.php");

    $pdo = new RequestPDO();
    $stmt = $pdo->connect()->prepare(getAllRepros());
    $stmt->execute();
    $reprosData = $stmt->fetchAll(PDO::FETCH_OBJ);
    ?>
    <!-- <script src="/app/ourdog.js" type="text/javascript"></script> -->
</head>

<body id="repro-page">
    <header>
        <h1 id="title" class="title"> Elevage du Domaine des Terres Noires </h1>
        <nav id="nav">
            <?php
            include_once(__DIR__ . "/php/navbar.php");
            ?>
        </nav>
    </header>
    <main id="ourdog">
        <h2>Nos Reproducteurs</h2>
        <section>
            <h3 class="hidden">Nos Reproducteurs</h3>
            <div>
                <?php
                foreach ($reprosData as $data) {
                    $repro = new Repro();
                    $repro->fillFromStdClass($data);
                    $name = strtolower($repro->getName());
                    echo "
                <a href='#dog-card' class='vignet-dog' id='{$name}' 
                    data-reproId='{$repro->getId()}'>
                    <figure>
                        <img src='{$repro->getMainImg()}' alt='{$name} {$repro->getBreeder()}' />
                        <figcaption>
                            <h6>{$repro->getName()}</h6>
                        </figcaption>
                    </figure>
                </a>
                    ";
                }

                ?>
                <section id="dog-card" class="card-hidden">
                    <h3 class="hidden">Nos Cane Corsos</h3>
                    <div>
                        <img id="dog-card-img" src="../src/img/okkaina 16-9.jpg" alt="okkaina">
                        <div id="dog-info">
                            <p class="fa fa-paw" id="dog-card-name"> </p>
                            <p class="fa fa-calendar-check" id="dog-card-birth"></p>
                            <p class="fa" id="dog-card-sex"></p>
                            <a href="#" id="baby-link" class="btn btn-pink btn__anim hidden">Voir ses bébés</a>
                            <a href="#modal-diapos" id="album-photo" class="btn btn-beige btn__anim">Voir son Album
                                Photo</a>
                        </div>
                    </div>
                </section>
                <aside id="modal-diapos" class="hidden">
                    <button id="close" onclick="hideModal()">X</button>
                    <div id="img-container">
                    </div>
                </aside>
        </section>
    </main>
    <?php
    include_once(__DIR__ . "/php/footer.php");
    ?>


    <script type="text/javascript" src="/app/ourdog.js"></script>


</body>



</html>