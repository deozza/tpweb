<?php

session_start();

include '../Vue/base.php';
include '../Vue/Profile/login.php';

if (isset($_SESSION['id'])){
    header("Location: index");
}