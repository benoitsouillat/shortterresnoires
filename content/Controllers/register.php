<?php

require_once('../../conn/conn.php');
require_once('../Classes/User.php');
session_start();


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$passverif = $_POST['passverif'];

if ($passverif !== $password) {
    header("Location:../../../Vues/register.php?error=notsamepass");
} else {
    $user = new User();
    $user->register($conn, $username, $email, $password);
    echo "<p>Enregistrement réussi : <a href='../login.php'>Retour à la connexion !</a></p>";
}
