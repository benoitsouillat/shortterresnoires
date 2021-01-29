<!DOCTYPE html>
<html lang="fr-fr">
    <head>
        <title>Nous Contacter - Les Terres Noires</title>
        <?php
            include "./php/head.php";
        ?>
    </head>
    <body id="content">
        <header id="header">
        <h1 class="title"> Nous Contacter</h1>
        <nav id="nav">
            <?php 
            include "./php/navbar.php";
             ?>
        </nav>
    </header>
    <div class="container mt-5">
        <section class="row mb-4 d-sm-flex justify-content-sm-center align-content-sm-center ">
            <div class="col-4 img-contact-container">
                <img src="../src/img/evapanama.jpg" alt="contactez-nous" class="img-contact"/>
            </div>
            <div class="col d-flex justify-content-center mt-5 font-weight-bold">
                <ul class="col-3 d-flex flex-column justify-content-start list-unstyled">
                    <li> Téléphone :</li>
                    <li> Email :</li>
                    <li> Facebook :</li>
                    <li> Courrier :</li>
                </ul>
                <ul class="col d-flex flex-column list-unstyled">
                    <li>06 70 37 81 13</li>
                    <li>domainedesterresnoires@gmail.com</li>
                    <li><a href="https://www.facebook.com/ledomainedes.terresnoires" target="_blank" ><u>Le domaine des Terres Noires</u></a></li>
                    <address><li>Eva Brochet </li>
                    <li>2 Avenue du clocher </li> 
                    <li>87190 St-Léger-Magnazeix</li></address>
                </ul>
            </div>
        </section>
        <br/>
        <section>
            <h3 class="mb-5">Où sommes-nous ?</h3>
            <div class="d-flex flex-column justify-content-center align-items-center mb-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2757.188179496862!2d1.243944316046092!3d46.28623557911921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fc0737b2a2559d%3A0x2082e5ba25e841a8!2s2%20Avenue%20du%20Clocher%2C%2087190%20Saint-L%C3%A9ger-Magnazeix!5e0!3m2!1sfr!2sfr!4v1605519064445!5m2!1sfr!2sfr" width="400" height="300" frameborder="1" style="border:1;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
        </section>
        <section class="mb-5">
            <u><h3 class="mb-2 line-height-4"> Nos adresses conseils :</h3></u><br/>
            <div class="row d-flex flex-column justify-content-center align-content-center text-center mb-3 h5">
                <div class="col-10">
                    <u><a href="http://www.lewhippet.com" target="blank_"><b>La Romance des Damoiseaux</b></a></u><br/>
                    <p class="h6 line-height-2 mt-2">Elevage de Whippet en Corrèze où j'ai eu la chance de faire mon apprentissage et d'obtenir mon diplôme.<br/>
                        <b>Merci Sabine.</b></p>
                </div>
            </div>
            <div class="row d-flex flex-column justify-content-center align-content-center text-center mb-3 h5">
                <div class="col-10">
                    <u><a href="https://www.le-temple-de-jade.com/" target="blank_" ><b>Le Temple de Jade</b></a></u><br/>
                    <p class="h6 line-height-2 mt-2">Elevage de Cane Corso dans l'Indre, un éleveur talentueux que j'ai eu la chance de rencontrer 
                        et qui m'apprendra toujours tant sur cette race que j'adore !<br/>
                        <b>Merci Régis et Cathy.</b></p>
                </div>
            </div>
        </section>
    </div>

    <?php 
        include "./php/footer.php";
    ?>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="../app/res.js" ></script>

    </body>
</html>