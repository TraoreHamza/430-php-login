<?php
// Ouvre une connexion à la Base de données
include $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
// include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/user.php';

// lis les informatons saisie dans le formulaire
$user = [];
$user ['mail'] = $_POST['mail'];
$user ['password'] = $_POST['password'];

$user = getUser($login, $pwd, $dbConnection);


header('Location: ' . '/ctrl/login/login.php');


