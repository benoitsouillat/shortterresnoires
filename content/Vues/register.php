<html lang="FR-fr">

<head>
    <title>Enregistrement</title>
    <?php
    include "../php/head.php";
    ?>
</head>

<body class="bg-dark text-light">
    <section class="text-center bg-dark text-light">
        <h1>Page d'enregistrement</h1>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <form class="d-flex flex-column justify-content-center align-items-center" method="post" action="../Controllers/register.php">
                <label for="username">Nom d'utilisateur</label>
                <input name="username" id="username" type="text" required>
                <label for="email">Email</label>
                <input name="email" id="email" type="email" required>
                <label for="password">Mot de passe</label>
                <input name="password" id="password" type="password" required>
                <label for="passverif">Vérifiez votre mot de passe</label>
                <input name="passverif" id="passverif" type="password" required>
                <button type="submit" class="btn btn-success">S'enregistrer</button>
            </form>
        </div>
    </section>

</body>

</html>