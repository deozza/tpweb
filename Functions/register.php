<?php
include_once '../Modele/User.php';
$user = new User();
if($_POST['register']) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    if ($password == $passwordConfirm) {
        $existe = $user->userExist($email);

        if ($existe) {
            echo "Cet utilisateur existe déjà";
        } else {
            $register = $user->userRegister($email, sha1($password), $nom, $prenom);
            $user = $user->userLogin($email, sha1($password));
            header('Location: ../App/index.php');
        }

    } else {
        echo "Les mots de passe de correspondent pas";
    }

}