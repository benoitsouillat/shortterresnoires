<?php
session_start();
require_once('../Classes/User.php');


$identifier = $_POST['username'];
$password = $_POST['password'];
$user = new User();
$user->connect($identifier, $password);
$user->checkRole();
