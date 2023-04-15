<!DOCTYPE html>
<html lang="fr-fr">
    <head>
        <title>Les Mariages du domaine des Terres Noires</title>
        <?php 
            include "./php/head.php";
        ?>

    </head>
    <body id="weeding-page">
        <header id="header">
            <h1 class="title">Nos Mariages</h1>
            <nav id="nav">
                <?php 
                include "./php/navbar.php";
                 ?>
            </nav>
        </header>
        <main>
            <section id="weedings">
            </section>
        </main>

        <?php 
            include "./php/footer.php";
        ?>
        <script> document.write('<script type="text/javascript" src="../app/weeding.js?dev=' + Math.floor(Math.random() * 10) +  '"\><\/script>' ) </script>
        

    </body>
</html>