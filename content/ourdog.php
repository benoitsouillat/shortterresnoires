<html lang="FR-fr">
    <head>
        <title>Nos reproducteurs - Le domaine des terres noires</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&family=Roboto+Condensed:wght@400" rel="stylesheet"><script src="https://kit.fontawesome.com/5944b63bf2.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/5944b63bf2.js" crossorigin="anonymous"></script>
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        
        <link rel="stylesheet" href="../fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
        <link rel="stylesheet" href="../fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        
        <link rel="stylesheet" media="all and (max-width: 1280px)" href="../../css/smart-main.css" type="text/css" />
        <link rel="stylesheet" media="all and (min-width: 1280px)" href="../../css/main.css" type="text/css" />

        <link rel="shortcut icon" type="image/ico" href="../favicon/favicon.ico"/>
    </head>
    <body id="repro-page">
        <header>
            <h1 id="title" class="title"> Elevage du Domaine des Terres Noires </h1>
            <nav id="nav">
                <?php
                    include "./php/navbar.php";
                ?>
            </nav>
        </header>
        <main id="ourdog">
            <section>
                <h2>Nos Reproducteurs</h2>
                <div>
                    <div>
                        <figure id="okkaina">
                            <img src="../src/img/Mimi16-9couché.jpg" alt="okkaina du temple de jade" />
                            <figcaption>
                                <h6>Okkaina</h6>
                            </figcaption>
                        </figure>
                    </div>
                    <div>
                        <figure id="panama">
                            <img src="../src/img/panama4.jpg" alt="panama du temple de jade" />
                            <figcaption>
                                <h6>Panama</h6>
                            </figcaption>
                        </figure>
                    </div>
                    <div>
                        <figure id="rock">
                            <img src="../src/img/rock 16-9debout 2.jpg" alt="rock corso di munteanu" />
                            <figcaption>
                                <h6>Rock</h6>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </section>
            <section id="dog-card" class="card-hidden">
                <h2 class="hidden">Nos Cane Corsos</h2>
                <div>
                    <img id="dog-card-img" src="../src/img/okkaina 16-9.jpg" alt="okkaina" />
                    <div id="dog-info">
                        <p class="fa" ></p>
                        <p class="fa" ></p>
                        <p class="fa" ></p>
                        <a href="#" class="btn btn-pink btn__anim" >Voir ses bébés</a>
                        <a href="#"class="fancybox btn btn-beige btn__anim">Voir son Album Photo</a>
                    </div>
                </div>
            </section>
            <div id="our-dog-fancybox">
                <a class="fancybox" rel="okkaina" href="../src/img/okkaina1.jpg"></a>
                <a class="fancybox" rel="okkaina" href="../src/img/okkaina2.jpg"></a>
                <a class="fancybox" rel="okkaina" href="../src/img/okkaina3.jpg"></a>
                <a class="fancybox" rel="okkaina" href="../src/img/okkaina4.jpg"></a>

                <a class="fancybox" rel="panama" href="../src/img/panama1.jpg"></a>
                <a class="fancybox" rel="panama" href="../src/img/panama2.jpg"></a>
                <a class="fancybox" rel="panama" href="../src/img/panama3.jpg"></a>
                <a class="fancybox" rel="panama" href="../src/img/panama4.jpg"></a>

                <a class="fancybox" rel="rock" href="../src/img/rock1.jpg"></a>
                <a class="fancybox" rel="rock" href="../src/img/rock2.jpg"></a>
                <a class="fancybox" rel="rock" href="../src/img/rock3.jpg"></a>
                <a class="fancybox" rel="rock" href="../src/img/rock4.jpg"></a>


                
            </div>
        </main>
        <?php 
            include "./php/footer.php";
        ?>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../app/res.js"></script>
    <script src="../app/ourdog.js" ></script>

    <script type="text/javascript" src="../fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>
    <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    </body>



</html>