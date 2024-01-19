<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <title>Les Terres Noires - Bienvenue</title>
    <?php
    include "./php/head.php";

    ?>
</head>

<body class="container-fluid">
    <header id="header">
        <h1 id="title" class="title">Le Domaine des Terres Noires</h1>
        <nav id="nav">
            <?php
            include "./php/navbar.php";
            ?>
        </nav>
    </header>
    <main id="accueil-page">
        <section>
            <h2 class="hidden">Le Cane Corso Elevage Passion</h2>
            <div class="carousel slide carousel-fade" data-ride="carousel" data-pause="false" data-interval="6000"
                id="option">
                <ol class="carousel-indicators">
                    <li data-target="#option" data-slide-to="0" class="active btn__anim"></li>
                    <li data-target="#option" data-slide-to="1" class="btn__anim"></li>
                    <li data-target="#option" data-slide-to="2" class="btn__anim"></li>
                    <li data-target="#option" data-slide-to="3" class="btn__anim"></li>
                </ol>

                <div class="carousel-inner">
                    <div class='carousel-item active'>
                        <img src="../src/img/accueil_safari.jpg" alt="Le standard du Cane Corso et chiots disponibles">
                        <div class="carousel-caption opacity-4">
                            <p>Retrouvez nos chiots disponibles de Safari et Tonnerre</p>
                            <a href="/content/Vues/weeding.php" class="btn btn-info btn__anim">Nos chiots
                                disponibles</a>
                        </div>
                    </div>
                    <div class='carousel-item'>
                        <img src="../src/img/bebe_raia3j.jpg" alt="Annonce Gestation et Portée">
                        <div class="carousel-caption opacity-4">
                            <p>De magnifiques bébés sont nés ce Dimanche 26 Novembre<br></p>
                            <a href="/content/Vues/weeding.php" class="btn btn-success btn__anim">Voir les bébés </a>
                        </div>
                    </div>
                    <div class='carousel-item'>
                        <img src="../src/img/raia-pres.jpg" alt="Raia du temple de jade">
                        <div class="carousel-caption opacity-4">
                            <p>Nos Cane Corso sont très sociables, <br />
                                cependant ils savent parfaitement faire leur boulot de gardien.</p>
                            <a href="/content/ourdog.php" class="btn btn-warning btn__anim">Voir les photos</a>
                        </div>
                    </div>
                    <div class='carousel-item'>
                        <img style="background-color: lightblue" src="../src/img/IMG_2672.jpg"
                            alt="domaine des terres noires - elevage cane corso">
                        <div class="carousel-caption opacity-4">
                            <p>Voici toutes nos coordonnées,<br />
                                N'hésitez pas à nous contacter pour plus d'informations.</p>
                            <a href="/content/contact.php" class="btn btn-primary btn__anim">Contact</a>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev carousel-button-prevnext carousel-control-prev-btn" href="#option"
                    data-slide="prev">
                    <span class="btn btn-warning font-weight-bold">&lt;&lt;</span>
                    <span class="sr-only"> Précédent </span>
                </a>
                <a class="carousel-control-next carousel-button-prevnext carousel-control-next-btn" href="#option"
                    data-slide="next">
                    <span class="btn btn-warning font-weight-bold">&gt;&gt;</span>
                    <span class="sr-only"> Suivant </span>
                </a>
            </div>
        </section>
        <section class="accueil-section-p d-flex flex-column justify-content-center align-items-center">
            <h4>Le Domaine des Terres Noires</h4>
            <h6>Elevage sélection de Cane Corso </h6>
            <p class="accueil-p justify-content-center align-items-center w-75">Le Domaine des Terres Noires est un
                jeune élevage de Cane Corso situé en Haute-Vienne. <br />
                Ma priorité est une sélection sérieuse pour l'amélioration de cette race que nous aimons tellement. Nos
                chiots cane corso à vendre sont disponibles à la réservation
                Nous recherchons de futurs propriétaires bienveillants pour nos chiots et leur offrir une magnifique vie
                avec beaucoup tout l'amour et l'affection
                dont ils sont capables.
            </p>
        </section>
    </main>

    <?php
    include "./php/footer.php";
    ?>
    <script src="https://code.jquery.com/jquery-latest.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" defer></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"
        defer>
    </script>
</body>

</html>