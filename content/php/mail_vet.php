<?php

// Créér un bouton pour les portées, qui s'affiche uniquement 7 jours avant les 8 semaines des chiots et pour une durée maximal de 10 jours afin d'envoyer un email aux vétos avec les données des chiots à identifier

// Définir les paramètres SMTP (à adapter en fonction de votre configuration)
ini_set('SMTP', 'smtp.gmail.com'); // Remplacez 'smtp.example.com' par votre serveur SMTP
ini_set('smtp_port', 587); // Remplacez 587 par le port SMTP approprié

require_once '../Classes/RequestPDO.php';

$pdo = new RequestPDO();
$stmt = $pdo->connect()->prepare("SELECT * FROM `puppies` WHERE `litter` = 33");
$stmt->execute();
$puppies = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Adresse e-mail du destinataire
$to = 'domainedesterresnoires@gmail.com';

// Sujet de l'e-mail
$subject = 'Email pour Clinique Vétérinaire - Identification des chiots';

$message = "Bonjour, veuillez trouver ci-joint les informations des chiots pour l'identification : <br>";

foreach ($puppies as $puppy) {
    $message .= " {$puppy['name']} de sexe {$puppy['sex']} et de couleur {$puppy['color']} " . PHP_EOL . "<br>";
}

// En-têtes de l'e-mail
$headers = 'From: domainedesterresnoires@gmail.com'; // Remplacez par votre adresse e-mail


// Configurer le contexte du flux avec le support TLS
$context = stream_context_create([
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'crypto_method' => STREAM_CRYPTO_METHOD_TLS_CLIENT,
    ],
]);

echo $message;

// mail(
//     $to,
//     $subject,
//     $message . "\r\n",
//     $headers,
//     'domainedesterresnoires@gmail.com',
//     // $context
// );