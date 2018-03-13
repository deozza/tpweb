<?php

session_start();
include '../Vue/base.php';
include '../Vue/Article/base.php';

if(isset($_SESSION['privilege'])){
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
}

