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
        <h1 class="title">Raïa et Nixon</h1>
        <nav id="nav">
            <?php
            include "./php/navbar.php";
            ?>
        </nav>
    </header>
    <section class="puppy-para">
        <p><i>Portée née le : 31 Juillet 2023<br />
                N° Portée : LOF-2023027622-2023-1 <br />
                Insert de la mère : 250268723114885 </i>
        </p>
        <p>Nous sommes fiers de vous annoncer la naissance des chiots de Raïa et Nixon, voici les photos des ces
            magnifiques bébés. <br> Les chiots seront disponibles pour rejoindre leur famille dès le 25 Septembre 2023
        </p>
        <p class="para-right">
            <a class="btn btn-dark btn-sm" href="../content/ourdog.php" alt="les parents Raia et Nixon" style="margin-right: 15px;">Voir les parents</a>
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
        <!-- Noir -->
        <a class="fancybox" rel="noir" href="../src/img/raia1-puppies/noir/noir2.jpg"></a>
        <a class="fancybox" rel="noir" href="../src/img/raia1-puppies/noir/noir3.jpg"></a>
        <a class="fancybox" rel="noir" href="../src/img/raia1-puppies/noir/noir4.jpg"></a>
    </section>
    <section>
        <!-- Rose -->
        <a class="fancybox" rel="rose" href="../src/img/raia1-puppies/rose/rose2.jpg"></a>
        <a class="fancybox" rel="rose" href="../src/img/raia1-puppies/rose/rose3.jpg"></a>
        <a class="fancybox" rel="rose" href="../src/img/raia1-puppies/rose/rose4.jpg"></a>
        <a class="fancybox" rel="rose" href="../src/img/raia1-puppies/rose/rose5.jpg"></a>
    </section>
    <section>
        <!-- Violet -->
        <a class="fancybox" rel="violet" href="../src/img/raia1-puppies/violet/violet2.jpg"></a>
        <a class="fancybox" rel="violet" href="../src/img/raia1-puppies/violet/violet3.jpg"></a>
        <a class="fancybox" rel="violet" href="../src/img/raia1-puppies/violet/violet4.jpg"></a>
        <a class="fancybox" rel="violet" href="../src/img/raia1-puppies/violet/violet5.jpg"></a>
        <a class="fancybox" rel="violet" href="../src/img/raia1-puppies/violet/violet6.jpg"></a>
        <a class="fancybox" rel="violet" href="../src/img/raia1-puppies/violet/violet7.jpg"></a>
    </section>


    <?php
    include "./php/footer.php";
    ?>

    <script type="text/javascript" src="../app/puppies.js"></script>
    <script>
        listingPuppy(raiaLitterOne, "raia1");
    </script>


</body>

</html>