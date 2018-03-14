<?php
include_once '../Modele/User.php';
$user = new User();
$user->delete($_GET['id']);

header('Location: ../App/Admin/Utilisateurs');