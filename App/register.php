<?php
include '../Vue/base.php';
include '../Vue/Profile/register.php';

if (isset($_SESSION['id'])){
    header("Location: index");
}

?>