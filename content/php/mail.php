<html>
<head>
    <?php
        include "./head.php";
    ?>
</head>

<body id="page-mail">

<?php
    include "./navbar.php";


   $retour = mail('tido.squat@gmail.com', $_POST['pseudo'].' vous a envoyé un message depuis la page contact du site',
        "\r\n"."\r\n"."\r\n".
            'Un message de M : '.$_POST['pseudo']."\r\n". 'Email : ' .' '.
        $_POST['mail']."\n".'Voici son message : '."\r\n".$_POST['message'],
            'Envoyé depuis : lecanecorso.fr');
   if ($retour) {
       echo "Votre message a bien été envoyé \r\n ";
   }
    else 
        echo "Une erreur s'est produite, votre message n'a pas pu être envoyé .. \r\n";
?>

<br/>
<a href="/content/contact.php" class="btn btn-beige btn-mail" >Revenir au site</a>

</body>

</html>