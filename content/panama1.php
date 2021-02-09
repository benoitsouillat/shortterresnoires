<!DOCTYPE html>
<html lang="fr-fr">
<head>
        <title>Les Terres Noires</title>
        <link rel="stylesheet" href="../fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
        <link rel="stylesheet" href="../fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <?php
            include "./php/head.php"
        ?>

    </head>
    <body>
        <header id="header">
            <h1 class="title">Panama et Rock</h1>
            <nav id="nav">
                <?php 
                include "./php/navbar.php";
                 ?>
            </nav>
        </header>

        <section class="puppy-para">
            <p><i>Portée née le : 7 Février 2021<br/>
                N° Portée : LOF - 2021000903-2021-1 </i>
            </p>
            <p> Nous sommes ravis et très fiers de vous présenter nos 13 chiots issus de Panama et de Rock,
             8 Femelles et 5 Mâles ont vu le jour ce Dimanche 7 Février 2021. <br/>
             Nous les chouchoutons avec attention, un gros bravo à la maman qui s'occupe bien de ses bébés et 
             dont nous sommes très fiers.
            </p>
            <p class="para-right">
                <a class="btn btn-dark btn-sm" href="../content/ourdog.php" alt="les parents panama et rock" style="margin-right: 15px;">Voir les parents</a>
                <a class="btn btn-info btn-sm" href="#price" alt="Prix des chiots" >Voir les prix</a>

            </p>
        </section>
        <section id="puppies">

        </section>
        <section class="puppy-para">
            <br/>
            <i><p id="price">Le prix des chiots est de 1400€ pour un mâle gris ou fauve et de 1200€ pour un mâle noir ou bringé</p>
            <p>Le prix d'une femelle fauve, froment ou grise est de 1400€, et de 1200€ pour une femelle bringée ou noire</p>
            <p>Un acompte de 300€ vous sera demandé à la réservation du chiot, 
                ainsi qu'une attestation de réservation remplie et signée</p>
            <p>Merci de votre compréhension </p></i>
            <br/>
        </section>


        <section> <!-- Aucun -->
            <a class="fancybox" rel="aucun" href="../src/img/panama-puppies/aucun/Image00001.jpg"></a>
            <a class="fancybox" rel="aucun" href="../src/img/panama-puppies/aucun/Image00002.jpg"></a>
            <a class="fancybox" rel="aucun" href="../src/img/panama-puppies/aucun/Image00003.jpg"></a>

        <section> <!-- Beige -->
            <a class="fancybox" rel="beige" href="../src/img/panama-puppies/beige/Image00001.jpg"></a>
            <a class="fancybox" rel="beige" href="../src/img/panama-puppies/beige/Image00002.jpg"></a>
        </section>
        <section> <!-- Bleu Clair -->
            <a class="fancybox" rel="bleu clair" href="../src/img/panama-puppies/bleuclair/Image00001.jpg"></a>
        </section>
        <section> <!-- Bleu Foncé -->
            <a class="fancybox" rel="bleu foncé" href="../src/img/panama-puppies/bleufoncé/Image00001.jpg"></a>
        </section>
        <section> <!-- Jaune -->

        </section>
        <section> <!-- Marron -->
            <a class="fancybox" rel="marron" href="../src/img/panama-puppies/marron/Image00001.jpg"></a>
        </section>
        <section> <!-- Noir -->
            <a class="fancybox" rel="noir" href="../src/img/panama-puppies/noir/Image00001.jpg"></a>
            <a class="fancybox" rel="noir" href="../src/img/panama-puppies/noir/Image00002.jpg"></a>
        </section>
        <section> <!-- Orange -->
            <a class="fancybox" rel="orange" href="../src/img/panama-puppies/orange/Image00001.jpg"></a>
        </section>
        <section> <!-- Rose -->            
            <a class="fancybox" rel="rose" href="../src/img/panama-puppies/rose/Image00001.jpg"></a>

        </section>
        <section> <!-- Rose Pâle -->
            <a class="fancybox" rel="rose pâle" href="../src/img/panama-puppies/rosepale/Image00001.jpg"></a>
            <a class="fancybox" rel="rose pâle" href="../src/img/panama-puppies/rosepale/Image00002.jpg"></a>
        </section>
        <section> <!-- Rouge -->
            <a class="fancybox" rel="rouge" href="../src/img/panama-puppies/rouge/Image00001.jpg"></a>
            <a class="fancybox" rel="rouge" href="../src/img/panama-puppies/rouge/Image00002.jpg"></a>

        </section>
        <section> <!-- Vert -->

        </section>

        <section> <!-- Violet -->
            <a class="fancybox" rel="violet" href="../src/img/panama-puppies/violet/Image00001.jpg"></a>

        </section>

        <?php 
            include "./php/footer.php";
        ?>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="../app/res.js" ></script>
    <script type="text/javascript" src="../app/puppies.js" ></script>
    <script> 
        listingPuppy(panamaLitterOne, panama.dogName);
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script type="text/javascript" src="../fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>
    <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    </body>
</html>