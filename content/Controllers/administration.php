<?php
require_once('../Classes/User.php');
session_start();

$user = new User();
$user->fillFromSession($_SESSION);
if ($user->checkRole() === false) {
    echo 'Pas le bon role !!';
    header('Location:./logout.php');
} else {
    include_once('../Vues/administration.php');
}
