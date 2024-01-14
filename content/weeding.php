<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <title>Les Mariages du domaine des Terres Noires</title>
    <?php
    include "./php/head.php";
    ?>

</head>

<body id="weeding-page">
    <header id="header">
        <h1 class="title">Le Domaine des Terres Noires</h1>
        <nav id="nav">
            <?php
            include "./php/navbar.php";
            ?>
        </nav>
    </header>
    <main>
        <h2 class="title">Nos Mariages</h2>
        <section id="weedings">
        </section>
    </main>

    <?php
    include "./php/footer.php";
    ?>
    <script>
        document.write('<script type="text/javascript" src="../app/weeding.js?dev=' + Math.floor(Math.random() * 10) +
            '"\><\/script>')
    </script>


</body>

</html>