<?php
include_once '../Modele/User.php';
$user = new User();
if($_POST['login']) {
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $userlog = $user->userLogin($email, $password);

    if($userlog){

        header('Location: ../App/index.php');

    }else {
        header('Location: ../App/login.php?erreur=invalide');
    }
}