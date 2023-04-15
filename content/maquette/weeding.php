<html lang="fr-FR">
    <head>
        <title>Nos Mariages - Le domaine des Terres Noires</title>
        <?php
            include "../php/head.php";
        ?>
    </head>
    <body id="weeding-page">
        <header id="header">
            <h1 class="title" id="title">Nos Mariages </h1>
            <nav>
                <?php
                    include "../php/navbar.php";
                ?>
            </nav>
        </header>
        <main>
            <section id="weedings">
                <div class="div-weeding">             <!-- A Modifier pour un respect de la sémantique-->
                    <section class="female-weeding">
                        <div class="txt-weeding">
                            <h3>Panama</h3>
                            <p>née le : 02 Juin 2019</p>
                            <p>Issue du Temple de Jade</p>
                        </div>
                        <div class="img-weeding">
                            <img src="/src/img/panama-pres.jpg" alt="panama" />
                        </div>
                    </section>
                    <section class="male-weeding">
                        <div class="txt-weeding">
                            <h3>Rock</h3>
                            <p>née le : 18 Mars 2018</p>
                            <p>Issu Corso di Munteanu</p>
                        </div>
                        <div class="img-weeding">
                            <img src="/src/img/rock-pres.jpg" alt="rock" />
                        </div>
                    </section>
                </div>
                <h5 class="date-weeding">Portée prévue le 12 Février 2021</h5>
                <hr class="separate-weeding"></hr>
            </section>

        </main>
        <?php
            include "../php/footer.php";
        ?>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    </body>
</html>