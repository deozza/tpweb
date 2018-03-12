<?php
include_once '../Modele/User.php';
$user = new User();
if($_POST['login']) {
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $userlog = $user->userLogin($email, $password);

    if($userlog){

        switch ($_SESSION['privilege']){
            case 1:
                header('Location: ../App/Membre/index.php');
                break;
            case 2 :
                header('Location: ../App/Redacteur/index.php');
                break;
            case 3:
                header('Location: ../App/Admin/index.php');
                break;
        }
    }else {
        header('Location: ../App/login.php?erreur=invalide');
    }
}