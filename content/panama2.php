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
    <body id="puppy-page">
        <header id="header">
            <h1 class="title">Panama et Rock</h1>
            <nav id="nav">
                <?php 
                include "./php/navbar.php";
                 ?>
            </nav>
        </header>

        <section class="puppy-para">
            <p><i>Portée née le : 14 Octobre 2021<br/>
                N° Portée : LOF - 2021040728-2021-2 </i>
            </p>
            <p> Nous sommes ravis et très fiers de vous présenter nos 9 chiots issus de Panama et de Rock,
             6 Femelles et 3 Mâles ont vu le jour ce Jeudi 14 Octobre 2021. <br/>
             Nous les chouchoutons avec attention, un gros bravo à la maman qui s'occupe bien de ses bébés et 
             dont nous sommes très fiers.
            </p>
            <p class="para-right">
                <a class="btn btn-dark btn-sm" href="../content/ourdog.php" alt="les parents panama et rock">Voir les parents</a>
                <a class="btn btn-info btn-sm" href="#price" alt="Prix des chiots">Voir les prix</a>
                <!-- <a class="fancyvid btn btn-sm btn-beige" href="/src/vid/video1.mp4">Voir leur vidéo</a> -->

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
            <a class="fancybox" rel="aucun" href="../src/img/panama2-puppies/aucun/Image005.jpg"></a>
            <a class="fancybox" rel="aucun" href="../src/img/panama2-puppies/aucun/Image002.jpg"></a>
            <a class="fancybox" rel="aucun" href="../src/img/panama2-puppies/aucun/Image003.jpg"></a>
            <a class="fancybox" rel="aucun" href="../src/img/panama2-puppies/aucun/Image004.jpg"></a>


        <section> <!-- Jaune -->
            <a class="fancybox" rel="jaune" href="../src/img/panama2-puppies/jaune/Image002.jpg"></a>
            <a class="fancybox" rel="jaune" href="../src/img/panama2-puppies/jaune/Image003.jpg"></a>
            <a class="fancybox" rel="jaune" href="../src/img/panama2-puppies/jaune/Image004.jpg"></a>

        </section>
        <section> <!-- bleu -->
            <a class="fancybox" rel="bleu" href="../src/img/panama2-puppies/bleu/Image002.jpg"></a>
            <a class="fancybox" rel="bleu" href="../src/img/panama2-puppies/bleu/Image003.jpg"></a>

        </section>
        <section> <!-- vert -->
            <a class="fancybox" rel="vert" href="../src/img/panama2-puppies/vert/Image002.jpg"></a>
            <a class="fancybox" rel="vert" href="../src/img/panama2-puppies/vert/Image003.jpg"></a>
            <a class="fancybox" rel="vert" href="../src/img/panama2-puppies/vert/Image004.jpg"></a>

        </section>
        <section> <!-- violet -->
            <a class="fancybox" rel="violet" href="../src/img/panama2-puppies/violet/Image005.jpg"></a>
            <a class="fancybox" rel="violet" href="../src/img/panama2-puppies/violet/Image002.jpg"></a>
            <a class="fancybox" rel="violet" href="../src/img/panama2-puppies/violet/Image003.jpg"></a>
            <a class="fancybox" rel="violet" href="../src/img/panama2-puppies/violet/Image004.jpg"></a>

        </section>
        <section> <!-- Rose -->            
            <a class="fancybox" rel="rose" href="../src/img/panama2-puppies/rose/Image002.jpg"></a>
            <a class="fancybox" rel="rose" href="../src/img/panama2-puppies/rose/Image003.jpg"></a>
            <a class="fancybox" rel="rose" href="../src/img/panama2-puppies/rose/Image004.jpg"></a>

        </section>
        <section> <!-- orange -->
            <a class="fancybox" rel="orange" href="../src/img/panama2-puppies/orange/Image002.jpg"></a>
            <a class="fancybox" rel="orange" href="../src/img/panama2-puppies/orange/Image003.jpg"></a>
            <a class="fancybox" rel="orange" href="../src/img/panama2-puppies/orange/Image004.jpg"></a>

        </section>
        <section> <!-- Noir -->
            <a class="fancybox" rel="rouge" href="../src/img/panama2-puppies/noir/Image002.jpg"></a>
            <a class="fancybox" rel="rouge" href="../src/img/panama2-puppies/noir/Image003.jpg"></a>
            <a class="fancybox" rel="rouge" href="../src/img/panama2-puppies/noir/Image004.jpg"></a>

        </section>
        <section> <!-- marron -->
            <a class="fancybox" rel="marron" href="../src/img/panama2-puppies/marron/Image005.jpg"></a>
            <a class="fancybox" rel="marron" href="../src/img/panama2-puppies/marron/Image002.jpg"></a>
            <a class="fancybox" rel="marron" href="../src/img/panama2-puppies/marron/Image003.jpg"></a>
            <a class="fancybox" rel="marron" href="../src/img/panama2-puppies/marron/Image004.jpg"></a>

        </section>


        <?php 
            include "./php/footer.php";
        ?>

    <script type="text/javascript" src="../app/puppies.js" ></script>
    <script> 
        listingPuppy(panamaLitterTwo, panama.dogLitterPage);
    </script>



    </body>
</html>