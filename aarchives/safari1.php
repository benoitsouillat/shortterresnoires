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
        <h1 class="title">Safari et Tonnerre</h1>
        <nav id="nav">
            <?php
            include "./php/navbar.php";
            ?>
        </nav>
    </header>
    <section class="puppy-para">
        <p><i>Portée née le : 26 Novembre 2023<br />
                N° Portée : LOF-2023042732-2023-3 <br />
                Insert de la mère : 250269100176786 </i>
        </p>
        <p>Nous sommes fiers de vous annoncer la naissance des chiots de Safari et Tonnerre, voici les photos des ces
            magnifiques bébés. <br> Les chiots seront disponibles pour rejoindre leur famille dès le 21 Janvier 2024.
        </p>
        <p class="para-right">
            <a class="btn btn-dark btn-sm" href="../content/ourdog.php" alt="les parents Safari et Tonnerre" style="margin-right: 15px;">Voir les parents</a>
            <a class="btn btn-info btn-sm" href="#price" alt="Prix des chiots">Voir les prix</a>

        </p>
    </section>
    <section id="puppies">

    </section>
    <section class="puppy-para">
        <br />
        <i>
            <p id="price">Le prix d'un chiot de cette portée est fixé à 1200€ pour un mâle ou une femelle</p>
            <p>Un acompte de 300€ vous sera demandé à la réservation du chiot,
                ainsi qu'une attestation de réservation remplie et signée</p>
            <p>Merci de votre compréhension </p>
        </i>
        <br />
    </section>
    <section>
        <!-- Violet -->
        <a class="fancybox" rel="violet" href="../src/img/raia1-puppies/violet/violet2.jpg"></a>

    </section>


    <?php
    include "./php/footer.php";
    ?>

    <script type="text/javascript" src="../app/puppies.js"></script>
    <script>
        listingPuppy(safariLitterOne, "safari1");
    </script>


</body>

</html>