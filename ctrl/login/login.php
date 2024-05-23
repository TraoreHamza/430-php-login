<?php
// Ouvre une connexion à la Base de données
include $_SERVER['DOCUMENT_ROOT'] . '/cfg/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/model/lib/user.php';

// lis les informatons saisie dans le formulaire
$user = [];
$user ['mail'] = $_POST['mail'];
$user ['password'] = $_POST['password'];

$dbConnection = getConnection($dbConfig);
$user = getUser($user['mail'], $user['password'], $dbConnection);

if (empty($user)) {
   $_SESSION ['user'] = $user;
   header('Location = ' . '/ctrl/login/welcome.php');
   exit();
}else {
    header('Location: ' . '/ctrl/login/display.php');
    exit();
}



