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
        <h1 class="title">Okkaina et Paco</h1>
        <nav id="nav">
            <?php
            include "./php/navbar.php";
            ?>
        </nav>
    </header>
    <section class="puppy-para">
        <p><i>Portée née le : 22 Avril 2022<br />
                N° Portée : LOF-2022015767-2022-1 <br />
                Insert de la mère : 250268712756528 </i>
        </p>
        <p> Nous sommes enchanté de vous publier la naissance des chiots d'Okkaina et Paco <br />
            Ils sont nés ce samedi 22 Avril 2022, et sont au nombre de 13 dont 7 mâles et 6 femelles. <br />
            Nous chouchoutons ces derniers avec attention, bravo à la maman qui s'occupe magnifiquement bien de ses bébés.
        </p>
        <p class="para-right">
            <a class="btn btn-dark btn-sm" href="../content/ourdog.php" alt="les parents okkaina et paco" style="margin-right: 15px;">Voir les parents</a>
            <a class="btn btn-info btn-sm" href="#price" alt="Prix des chiots">Voir les prix</a>

        </p>
    </section>
    <section id="puppies">

    </section>
    <section class="puppy-para">
        <br />
        <i>
            <p id="price">Le prix d'un chiot de cette portée est fixé à 1500€ </p>
            <p>Un acompte de 300€ vous sera demandé à la réservation du chiot,
                ainsi qu'une attestation de réservation remplie et signée</p>
            <p>Merci de votre compréhension </p>
        </i>
        <br />
    </section>


    <section> <!-- Vert -->
        <a class="fancybox" rel="vert" href="../src/img/okkaina2-puppies/vert/vert3.jpg"></a>
    </section>

    <section> <!-- Bleu Clair / Cyan -->
        <a class="fancybox" rel="cyan" href="../src/img/okkaina2-puppies/cyan/cyan3.jpg"></a>
    </section>

    <section> <!-- Bleu Foncé-->
        <a class="fancybox" rel="bleu" href="../src/img/tonnerre3.jpg"></a>
        <a class="fancybox" rel="bleu" href="../src/img/okkaina2-puppies/bleu/bleu3.jpg"></a>
    </section>

    <section> <!-- Marron -->
        <a class="fancybox" rel="marron" href="../src/img/okkaina2-puppies/marron/marron3.jpg"></a>
    </section>

    <section> <!-- Citron / Vert Clair -->
        <a class="fancybox" rel="citron" href="../src/img/okkaina2-puppies/citron/citron3.jpg"></a>
    </section>

    <section> <!-- Sans Collier -->
        <a class="fancybox" rel="aucun" href="../src/img/okkaina2-puppies/aucun/aucun3.jpg"></a>
    </section>
    <section> <!--Rouge  -->
        <a class="fancybox" rel="rouge" href="../src/img/okkaina2-puppies/rouge/rouge3.jpg"></a>
    </section>
    <section> <!-- Rose -->
        <a class="fancybox" rel="rose" href="../src/img/okkaina2-puppies/rose/rose3.jpg"></a>
    </section>
    <section> <!--orange  -->
        <a class="fancybox" rel="orange" href="../src/img/okkaina2-puppies/orange/orange3.jpg"></a>
        <a class="fancybox" rel="orange" href="../src/img/tsunami-pres.jpg"></a>
    </section>
    <section> <!--violet  -->
        <a class="fancybox" rel="violet" href="../src/img/okkaina2-puppies/violet/violet3.jpg"></a>
    </section>
    <section> <!--fuschia  -->
        <a class="fancybox" rel="fuschia" href="../src/img/okkaina2-puppies/fuschia/fuschia3.jpg"></a>
        <a class="fancybox" rel="fuschia" href="../src/img/tornade1.jpg"></a>
    </section>
    <section> <!--bordeaux  -->
        <a class="fancybox" rel="bordeaux" href="../src/img/okkaina2-puppies/bordeaux/bordeaux3.jpg"></a>
    </section>
    <section> <!--jaune  -->
        <a class="fancybox" rel="jaune" href="../src/img/okkaina2-puppies/jaune/jaune3.jpg"></a>
    </section>
    <?php
    include "./php/footer.php";
    ?>
    <script>
        document.write('<script type="text/javascript" src="../app/puppies.js?d=' + Math.floor(Math.random() * 10) + '"\><\/script>')
    </script>
    <!-- <script type="text/javascript" src="../app/puppies.js" ></script> -->
    <script>
        listingPuppy(okkainaLitterTwo, okkaina.dogLitterPage);
    </script>


</body>

</html>