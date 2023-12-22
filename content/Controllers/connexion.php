<?php

require_once('../../conn/conn.php');
require_once('../Classes/User.php');
session_start();


$identifier = $_POST['username'];
$password = $_POST['password'];
$user = new User();
$user->connect($conn, $identifier, $password);
