<html lang="FR-fr">
    <head>
        <title>Nos reproducteurs - Le domaine des terres noires</title>
        <link rel="stylesheet" href="../fancybox/source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
        <link rel="stylesheet" href="../fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <script src="https://kit.fontawesome.com/5944b63bf2.js" crossorigin="anonymous"></script>
        <?php
            include "./php/head.php";
        ?>
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
            <h2>Nos Reproducteurs</h2>
            <section>
                <h3 class="hidden">Nos Reproducteurs</h3>
                <div>
                    <a href="#dog-card" class="vignet-dog" id="okkaina">
                        <figure >
                            <img src="../src/img/Mimi16-9couché.jpg" alt="okkaina du temple de jade" />
                            <figcaption>
                                <h6>Okkaina</h6>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="#dog-card" class="vignet-dog" id="panama">
                        <figure>
                            <img src="../src/img/panama4.jpg" alt="panama du temple de jade" />
                            <figcaption>
                                <h6>Panama</h6>
                            </figcaption>
                        </figure>
                    </a>
                    <a href="#dog-card" class="vignet-dog" id="rock">
                        <figure>
                            <img src="../src/img/rock 16-9debout 2.jpg" alt="rock corso di munteanu" />
                            <figcaption>
                                <h6>Rock</h6>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </section>
            <section id="dog-card" class="card-hidden">
                <h3 class="hidden">Nos Cane Corsos</h3>
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
                <a class="fancybox" rel="okkaina" href="../src/img/okkaina5.jpg"></a>
                <a class="fancybox" rel="okkaina" href="../src/img/okkaina8.jpg"></a>
                <a class="fancybox" rel="okkaina" href="../src/img/okkaina9.jpg"></a>
                <a class="fancybox" rel="okkaina" href="../src/img/okkaina10.jpg"></a>

                <a class="fancybox" rel="panama" href="../src/img/panama1.jpg"></a>
                <a class="fancybox" rel="panama" href="../src/img/panama3.jpg"></a>
                <a class="fancybox" rel="panama" href="../src/img/panama5.jpg"></a>
                <a class="fancybox" rel="panama" href="../src/img/panama6.jpg"></a>
                <a class="fancybox" rel="panama" href="../src/img/panama7.jpg"></a>
                <a class="fancybox" rel="panama" href="../src/img/panama8.jpg"></a>
                <a class="fancybox" rel="panama" href="../src/img/okkainapanama.jpg"></a>

                <a class="fancybox" rel="rock" href="../src/img/rock1.jpg"></a>
                <a class="fancybox" rel="rock" href="../src/img/rock2.jpg"></a>
                <a class="fancybox" rel="rock" href="../src/img/rock3.jpg"></a>
                <a class="fancybox" rel="rock" href="../src/img/rock4.jpg"></a>
                <a class="fancybox" rel="rock" href="../src/img/rockpropuls.jpg"></a>
                <a class="fancybox" rel="rock" href="../src/img/rockprofil.jpg"></a>


                
            </div>
        </main>
        <?php 
            include "./php/footer.php";
        ?>


    <script type="text/javascript" src="../app/ourdog.js" ></script>


    </body>



</html>