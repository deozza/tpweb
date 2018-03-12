<?php
include_once '../Modele/User.php';

$user = new User();
$userlogout = $user->logout();

if($userlogout){
    header('Location: /tpweb/App');
}