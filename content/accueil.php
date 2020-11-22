<!DOCTYPE html>
<html lang="fr-fr">

    <head>
        <title>Les Terres Noires</title>
        <meta charset="utf-8" />
        <meta name="description" content="Page Accueil Elevage Cane Corso Limousin 87" />
        <meta name="KEYWORDS" content="Elevage Cane Corso Chien de cour Italien Limousin eleveur" />
        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" media="screen and (max-width: 1279px)" href="../css/smart-main.css" type="text/css" />
        <link rel="stylesheet" media="screen and (min-width: 1280px)" href="../css/main.css" type="text/css" />
        <link rel="stylesheet" media="all" href="../css/menu.css" type="text/css" />
        <link rel="shortcut icon" type="image/ico" href="../favicon/favicon.ico" />

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
        <section class="row">
            <aside class="col">
                <div class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000" id="option">
                    <ol class="carousel-indicators carousel-indicators-review">
                        <li data-target="#option" data-slide-to="0" class="active"></li>
                        <li data-target="#option" data-slide-to="1"></li>
                        <li data-target="#option" data-slide-to="2"></li>
                        <li data-target="#option" data-slide-to="3"></li>
                    </ol>    
                    <div class="carousel-inner  font-weight-bold">
                        <div class='carousel-item active d-flex flex-column'>
                            <img src="../src/img/bb-okkaina.jpg" class="w-75 align-self-center">
                            <div class="carousel-caption carousel-caption-move bg-dark opacity-4 rounded">
                                <p>Okkaina et Rock se sont unis, les chiots sont nés le 16 Novembre 2020 <br/>
                            Ils sont déjà disponibles à la réservation.</p>
                                <a href="./okkaina1.php" role="button" class="btn btn-success">Voir nos Bébés disponibles </a>
                            </div>
                        </div>
                        <div class='carousel-item d-flex flex-column'>
                            <img src="../src/img/rock16-9couché.jpg" class="w-75 align-self-center">
                            <div class="carousel-caption carousel-caption-move bg-dark opacity-4 rounded">
                                <p>Nos Cane Corso sont très sociables, <br/>
                                cependant ils savent très bien faire leur boulot de gardien.</p>
                                <a href="./ourdog.php" role="button" class="btn btn-warning">Voir les photos</a>
                            </div>
                        </div>
                        <div class='carousel-item d-flex flex-column'>
                            <img src="../src/img/panama16-9.jpg" class="w-75 align-self-center">
                            <div class="carousel-caption carousel-caption-move bg-dark opacity-4 rounded">
                                <p>Retrouvez notre page standard du Cane Corso <br/> 
                                Pour tout connaître sur la race.</p>
                                <a href="./breed.php" role="button" class="btn btn-info">Le Cane Corso</a>
                            </div>
                        </div>
                        <div class='carousel-item d-flex flex-column'>
                            <img style="background-color: lightblue" src="../src/img/terrenoirealpha2.png" class="w-75 align-self-center">
                            <div class="carousel-caption carousel-caption-move bg-dark opacity-4 rounded">
                                <p>Voici toutes nos coordonnées,<br/> 
                                N'hésitez pas à nous contacter pour plus d'informations.</p>
                                <a href="./okkaina1.php" role="button" class="btn btn-primary">Contact</a>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev carousel-button-prevnext carousel-control-prev-btn" href="#option" data-slide="prev">
                        <span class="btn btn-info font-weight-bold"><<</span>
                        <span class="sr-only"> Précédent </span>
                    </a>
                    <a class="carousel-control-next carousel-button-prevnext carousel-control-next-btn" href="#option" data-slide="next">
                        <span class="btn btn-info font-weight-bold">>></span>
                        <span class="sr-only"> Suivant </span>
                    </a>


                </div>
            </aside>

        </section>

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
