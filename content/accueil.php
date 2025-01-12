<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <title>Les Terres Noires - Bienvenue</title>
    <?php
    include "./php/head.php";

    ?>
</head>

<body class="container-fluid">
    <?php
    include_once "../content/php/header.php";
    ?>
    <main id="accueil-page">
        <section>
            <h1 class="hidden">Le Cane Corso, Un Elevage de Passion</h1>
            <h2 class="hidden">Le Domaine des Terres Noires - Elevage Passion et Familial de Cane Corso</h2>
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
                            <p>Retrouvez nos adorables chiots disponibles de Panama et Tonnerre</p>
                            <a href="/content/Vues/weeding.php" class="btn btn-info btn__anim"
                                title="Découvrez nos adorables chiots Cane Corso LOF">Nos chiots
                                disponibles</a>
                        </div>
                    </div>
                    <div class='carousel-item'>
                        <img src="../src/img/bebe_raia3j.jpg" alt="Annonce Gestation et Portée">
                        <div class="carousel-caption opacity-4">
                            <p>Mariage de Tornade et Tyson <br>De magnifiques bébés arrivent à mi-juillet 🥰</p>
                            <a href="/content/Vues/weeding_litter.php?litterID=7" class="btn btn-success btn__anim"
                                title="Retrouvez nos dernières portées et nos chiots disponibles à la réservation">Voir
                                nos bébés </a>
                        </div>
                    </div>
                    <div class='carousel-item'>
                        <img src="../src/img/zara-pres.jpg" alt="Zara Corso del Cuore Grande">
                        <div class="carousel-caption opacity-4">
                            <p>Nos Cane Corso sont très sociables, <br />
                                ils savent également parfaitement faire leur boulot de gardien.</p>
                            <a href="/content/ourdog.php" class="btn btn-warning btn__anim"
                                title="Retrouvez nos reproducteurs">Voir les photos</a>
                        </div>
                    </div>
                    <div class='carousel-item'>
                        <img style="background-color: lightblue" src="../src/img/IMG_2672.jpg"
                            alt="domaine des terres noires - elevage cane corso">
                        <div class="carousel-caption opacity-4">
                            <p>Voici toutes nos coordonnées,<br />
                                N'hésitez pas à nous contacter pour plus d'informations.</p>
                            <a href="/content/contact.php" class="btn btn-primary btn__anim"
                                title="Contactez nous pour prendre plus de renseignements">Contact</a>
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
        <section class="accueil-section-p">
            <h3>Le Domaine des Terres Noires</h3>
            <h6>Elevage sélection de Cane Corso </h6>
            <p class="accueil-p justify-content-center align-items-center w-75">Le Domaine des Terres Noires incarne un
                élevage familial et dédié à la passion des Cane Corso.<br> Situé en Corrèze à Vigeois (19), nos chiots
                sont LOF et partiront vaccinés, identifiés, vermifugés avec un certificat de bonne santé. <br>
                Notre priorité est une sélection sérieuse pour l'amélioration de cette race que nous aimons tant et des
                chiens en excellente santé tout au long de leur vie, c'est aussi pour cela que nous lui offrons 2 mois
                de mutulelle santé avec notre partenaire AnimaSolution. <br> Ils seront disponibles à la réservation dès
                leur
                naissance, ainsi nous recherchons de futurs propriétaires bienveillants pour nos chiots et leur offrir
                une magnifique vie
                avec beaucoup tout l'amour et l'affection
                dont ils sont capables. <br>
                En choisissant un chiot du Domaine des Terres Noires, vous optez pour la qualité et l'authenticité, mais
                surtout un lien indéfectible avec un amour des Cane Corso. Nous sommes honorés de partager cette passion
                avec vous et sommes impatients de vous accompagner dans cette merveilleuse aventure qu'est la paternité
                canine. <br>
                N'hésitez pas à nous contacter par email ou par téléphone au <a href="+33670378113">06 70 37 81 13</a>
                pour plus de renseignements.
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