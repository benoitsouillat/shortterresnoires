<html lang="FR-fr">

<head>
    <title>Nos reproducteurs - Le domaine des terres noires</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <?php
    include_once(__DIR__ . "/php/head.php");
    require_once(__DIR__ . "/Classes/Repro.php");
    require_once(__DIR__ . "/Classes/RequestPDO.php");


    $pdo = new RequestPDO();
    $stmt = $pdo->connect()->prepare(getAllReprosAreMyDogs());
    $stmt->execute();
    $reprosData = $stmt->fetchAll(PDO::FETCH_OBJ);
    ?>
    <script src="https://kit.fontawesome.com/5944b63bf2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" media="all" href="/css/main.css" type="text/css" />

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
        <section class="ourdog-container">
            <h3 class="hidden">Nos Reproducteurs</h3>
            <div class="dog-list">
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
            </div>
            <section id="dog-card" class="card-hidden">
                <h3 class="hidden">Nos Cane Corsos</h3>
                <div>
                    <img id="dog-card-img" src="../src/img/repro-default.jpg" alt="okkaina" loading="lazy">
                    <div id="dog-info">
                        <p class="fa fa-paw" id="dog-card-name"> </p>
                        <p class="fa fa-calendar-check" id="dog-card-birth"></p>
                        <p class="fa" id="dog-card-sex"></p>
                        <a href="#" id="baby-link" class="btn btn-pink btn__anim hidden">Voir ses bébés</a>
                        <a href="#diapo-div" id="album-photo" class="btn btn-beige btn__anim">Voir son Album
                            Photo</a>
                    </div>
                </div>
            </section>
            <div id="diapo-div" class="hidden">
                <aside id="modal-diapos" class="hidden diapo-container" data-speed="3500" data-dog-id="1">
                    <div id="img-container" class="diapo">
                    </div>
                    <button id="close" onclick="hideModal()">X</button>
                </aside>
                <div id="arrow-div">
                    <button id="left-arrow" class="hidden">
                        <span class="bi bi-caret-left bi-caret-left-1"></span>
                    </button>
                    <button id="right-arrow" class="hidden">
                        <span class="bi bi-caret-right bi-caret-right-1"></span>
                    </button>
                </div>
            </div>
            <div id="grey-bg" class="hidden"></div>
        </section>
    </main>
    <?php
    include_once(__DIR__ . "/php/footer.php");
    ?>


    <script type="text/javascript" src="/app/ourdog.js"></script>
    <script src="/content/assets/slider.js" crossorigin="anonymous"></script>

</body>



</html>