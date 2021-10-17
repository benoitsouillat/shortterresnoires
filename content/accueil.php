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
                <div class="carousel slide carousel-fade" data-ride="carousel" data-pause="false" data-interval="6000" id="option">
                    <ol class="carousel-indicators">
                        <li data-target="#option" data-slide-to="0" class="active btn__anim"></li>
                        <li data-target="#option" data-slide-to="1" class="btn__anim"></li>
                        <li data-target="#option" data-slide-to="2" class="btn__anim"></li>
                        <li data-target="#option" data-slide-to="3" class="btn__anim"></li>
                    </ol>    
                    <div class="carousel-inner">
                        <div class='carousel-item active'>
                            <img src="../src/img/panama8.jpg" alt="Annonce Gestation et Portée">
                            <div class="carousel-caption opacity-4">
                                <p>Nous sommes ravis de vous annoncer la naissance des 9 magnifiques bébés de Panama et de Rock<br/> Les chiots sont disponibles à la réservation </p>
                                <a href="/content/panama2.php" class="btn btn-success btn__anim">Voir les bébés </a>
                            </div>
                        </div>
                        <div class='carousel-item'>
                            <img src="../src/img/rock16-9couché.jpg" alt="Rock Corso di Munteanu">
                            <div class="carousel-caption opacity-4">
                                <p>Nos Cane Corso sont très sociables, <br/>
                                cependant ils savent très bien faire leur boulot de gardien.</p>
                                <a href="/content/ourdog.php" class="btn btn-warning btn__anim">Voir les photos</a>
                            </div>
                        </div>
                        <div class='carousel-item'>
                            <img src="../src/img/panama16-9.jpg" alt="Le standard du Cane Corso">
                            <div class="carousel-caption opacity-4">
                                <p>Retrouvez notre page standard du Cane Corso <br/> 
                                Pour tout connaître sur la race.</p>
                                <a href="/content/breed.php" class="btn btn-info btn__anim">Le Cane Corso</a>
                            </div>
                        </div>
                        <div class='carousel-item'>
                            <img style="background-color: lightblue" src="../src/img/terrenoirealpha2.png" alt="domaine des terres noires - elevage cane corso">
                            <div class="carousel-caption opacity-4">
                                <p>Voici toutes nos coordonnées,<br/> 
                                N'hésitez pas à nous contacter pour plus d'informations.</p>
                                <a href="/content/contact.php" class="btn btn-primary btn__anim">Contact</a>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev carousel-button-prevnext carousel-control-prev-btn" href="#option" data-slide="prev">
                        <span class="btn btn-warning font-weight-bold">&lt;&lt;</span>
                        <span class="sr-only"> Précédent </span>
                    </a>
                    <a class="carousel-control-next carousel-button-prevnext carousel-control-next-btn" href="#option" data-slide="next">
                        <span class="btn btn-warning font-weight-bold">&gt;&gt;</span>
                        <span class="sr-only"> Suivant </span>
                    </a>
                </div>
            </section>
            <section class="accueil-section-p d-flex flex-column justify-content-center align-items-center">
                <h4>Le Domaine des Terres Noires</h4>
                <h6>Elevage sélection de Cane Corso </h6>
                <p class="accueil-p w-75">Le Domaine des Terres Noires est un jeune élevage de Cane Corso situé en Haute-Vienne. <br/>
                    Ma priorité est une sélection sérieuse pour l'amélioration de cette race que nous aimons tellement. 
                    Nous recherchons de futurs propriétaires bienveillants pour nos chiots et leur offrir une magnifique vie avec beaucoup tout l'amour et l'affection 
                    dont ils sont capables.
                </p>
            </section>
        </main>

        <?php 
            include "./php/footer.php";
        ?>


    </body>
</html>
