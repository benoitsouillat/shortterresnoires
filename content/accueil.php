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
        <main class="row">
            <section class="col">
                <h2 class="hidden">Le Cane Corso Elevage Passion</h2>
                <div class="carousel slide carousel-fade" data-ride="carousel" data-pause="false" data-interval="6000" id="option">
                    <ol class="carousel-indicators carousel-indicators-review">
                        <li data-target="#option" data-slide-to="0" class="active btn__anim"></li>
                        <li data-target="#option" data-slide-to="1" class="btn__anim"></li>
                        <li data-target="#option" data-slide-to="2" class="btn__anim"></li>
                        <li data-target="#option" data-slide-to="3" class="btn__anim"></li>
                    </ol>    
                    <div class="carousel-inner font-weight-bold">
                        <div class='carousel-item active d-flex flex-column'>
                            <img src="../src/img/panama4.jpg" class="w-75 align-self-center" alt="Annonce Gestation et Portée">
                            <div class="carousel-caption carousel-caption-move bg-dark opacity-4 rounded align-self-center">
                                <p>Nous sommes ravis de vous confirmer la gestation de Panama mariée avec Rock<br/>
                                Les pré-réservations pour cette portée à venir sont ouvertes.</p>
                                <a href="./weeding.php" role="button" class="btn btn-success btn__anim">Voir nos mariages </a>
                            </div>
                        </div>
                        <div class='carousel-item d-flex flex-column'>
                            <img src="../src/img/rock16-9couché.jpg" class="w-75 align-self-center" alt="Rock Corso di Munteanu">
                            <div class="carousel-caption carousel-caption-move bg-dark opacity-4 rounded align-self-center">
                                <p>Nos Cane Corso sont très sociables, <br/>
                                cependant ils savent très bien faire leur boulot de gardien.</p>
                                <a href="./ourdog.php" role="button" class="btn btn-warning btn__anim">Voir les photos</a>
                            </div>
                        </div>
                        <div class='carousel-item d-flex flex-column'>
                            <img src="../src/img/panama16-9.jpg" class="w-75 align-self-center" alt="Le standard du Cane Corso">
                            <div class="carousel-caption carousel-caption-move bg-dark opacity-4 rounded align-self-center">
                                <p>Retrouvez notre page standard du Cane Corso <br/> 
                                Pour tout connaître sur la race.</p>
                                <a href="./breed.php" role="button" class="btn btn-info btn__anim">Le Cane Corso</a>
                            </div>
                        </div>
                        <div class='carousel-item d-flex flex-column'>
                            <img style="background-color: lightblue" src="../src/img/terrenoirealpha2.png" class="w-75 align-self-center" alt="domaine des terres noires - elevage cane corso">
                            <div class="carousel-caption carousel-caption-move bg-dark opacity-4 rounded align-self-center">
                                <p>Voici toutes nos coordonnées,<br/> 
                                N'hésitez pas à nous contacter pour plus d'informations.</p>
                                <a href="./okkaina1.php" role="button" class="btn btn-primary btn__anim">Contact</a>
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
        </main>

        <?php 
            include "./php/footer.php";
        ?>
        
        <!--SCRIPT-->
        <script src="../app/res.js"></script>

        <!--BOOTSTRAP-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
</html>