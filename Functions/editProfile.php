<?php
include_once '../Modele/User.php';
$user = new User();
if($_POST['edit']) {
    $email = $_POST['email'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $newPassword = $_POST['password'];

    $editUser = $user->editUser($email, $nom, $prenom, $newPassword);

    header('Location: /tpweb/App');
}