<?php
session_start();
if (isset($_SESSION) && isset($_SESSION['username']) && $_SESSION['username'] != null) {
    echo "<span class='label label-info m-3 p-3'>Connecté en tant que {$_SESSION['username']}</span>";
}
?>

<html lang="FR-fr">

<head>
    <title>Se Connecter</title>
    <?php
    include "./php/head.php";
    ?>
</head>

<body>
    <section>
        <h1>Se Connecter</h1>
        <h2>Page réservée à l'administration du site</h2>
        <div class="mt-3 d-flex flex-row justify-content-around align-items-center">
            <div class="col-12 col-sm-8 d-flex flex-column justify-content-center align-items-center">
                <h3>Entrez vos identifiants</h3>
                <?php
                if ((isset($_GET['error'])) && ($_GET['error'] == 'badlog')) {
                    echo "<div><span class='label label-alert'>
                    <p class='mt-4 label label-alert text-center'> La Connexion a échouée ! <br> Vérifiez vos informations de connexion </p>
                    </span>
                    </div>
                    ";
                }
                ?>
                <form class="d-flex flex-column justify-content-center align-items-center" method="post" action="./Controllers/connexion.php">

                    <label for="username">Email utilisateur</label>
                    <input name="username" type="text" id="username" required>
                    <label for="password">Mot de Passe</label>
                    <input name="password" type="password" id="password" required>
                    <br>
                    <button type="submit" class="btn btn-success">Se Connecter</button>

                </form>
            </div>
            <div class="col-3 d-flex flex-column justify-content-center align-items-center bg-dark p-5">
                <p class="text-center">En cas d'erreur vous pouvez retourner sur <a href='https://www.lecanecorso.fr'>le
                        site</a></p>
                <a href="https://www.lecanecorso.fr" class="btn btn-info">Retour au site LeCaneCorso.fr</a>
            </div>
        </div>
    </section>

</body>

</html>