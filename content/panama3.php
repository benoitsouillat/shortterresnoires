<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">

    <title>Les Terres Noires</title>
    <link rel="stylesheet" href="../fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
    <link rel="stylesheet" href="../fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <?php
    include "./php/head.php"
    ?>

</head>

<body id="puppy-page">
    <header id="header">
        <h1 class="title">Panama et Poyel</h1>
        <nav id="nav">
            <?php
            include "./php/navbar.php";
            ?>
        </nav>
    </header>

    <section class="puppy-para">
        <p><i>Portée née le : 13 Août 2023 <br />
                N° Portée : LOF - 2023027623-2023-2<br />
                Insert de la mère : 250268712820566</i>
        </p>
        <p>
        </p>
        <p class="para-right">
            <a class="btn btn-dark btn-sm" href="../content/ourdog.php" alt="les parents panama et Poyel">Voir les
                parents</a>
            <a class="btn btn-info btn-sm" href="#price" alt="Prix des chiots">Voir les prix</a>
            <!-- <a class="fancyvid btn btn-sm btn-beige" href="/src/vid/video1.mp4">Voir leur vidéo</a> -->

        </p>
    </section>
    <section id="puppies">

    </section>
    <section class="puppy-para">
        <br />
        <i>
            <p id="price">Le prix des chiots est de 1200€ </p>
            <p>Un acompte de 300€ vous sera demandé à la réservation du chiot,
                ainsi qu'une attestation de réservation remplie et signée</p>
            <p>Merci de votre compréhension </p>
        </i>
        <br />
    </section>
    <section>
        <!-- Rose -->
        <a class="fancybox" rel="rose" href="../src/img/panama3-puppies/rose/1.jpg"></a>
    </section>
    <section>
        <!-- femfro -->
        <a class="fancybox" rel="femfro" href="../src/img/panama3-puppies/femfro/1.jpg"></a>
    </section>
    <section>
        <!-- violet -->
        <a class="fancybox" rel="violet" href="../src/img/panama3-puppies/violet/1.jpg"></a>
    </section>
    <section>
        <!-- bordeaux -->
        <a class="fancybox" rel="bordeaux" href="../src/img/panama3-puppies/bordeaux/1.jpg"></a>
    </section>
    <section>
        <!-- Fauve -->
        <a class="fancybox" rel="fauve" href="../src/img/panama3-puppies/fauve/1.jpg"></a>
        <a class="fancybox" rel="fauve" href="../src/img/panama3-puppies/fauve/2.jpg"></a>
        <a class="fancybox" rel="fauve" href="../src/img/panama3-puppies/fauve/3.jpg"></a>
        <a class="fancybox" rel="fauve" href="../src/img/panama3-puppies/fauve/4.jpg"></a>
    </section>
    <section>
        <!-- malfro -->
        <a class="fancybox" rel="malfro" href="../src/img/panama3-puppies/malfro/1.jpg"></a>
    </section>
    <section>
        <!-- vert -->
        <a class="fancybox" rel="vert" href="../src/img/panama3-puppies/vert/1.jpg"></a>
    </section>
    <section>
        <!-- noir -->
    </section>
    <section>
        <!-- jaune -->
        <a class="fancybox" rel="jaune" href="../src/img/panama3-puppies/jaune/1.jpg"></a>
    </section>
    <section>
        <!-- bleu -->
        <a class="fancybox" rel="bleu" href="../src/img/panama3-puppies/bleu/1.jpg"></a>
    </section>
    <section>
        <!-- orange -->
        <a class="fancybox" rel="orange" href="../src/img/panama3-puppies/orange/1.jpg"></a>
    </section>



    <?php
    include "./php/footer.php";
    ?>

    <!-- <script type="text/javascript" src="../app/puppies.js" ></script> -->
    <script>
        document.write('<script type="text/javascript" src="../app/puppies.js?dev=' + Math.floor(Math.random() * 10) +
            '"\><\/script>')
    </script>
    <script>
        listingPuppy(panamaLitterThree, panama.dogLitterPage);
    </script>



</body>

</html>