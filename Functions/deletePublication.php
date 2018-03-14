<?php
include_once '../Modele/Publication.php';
$publication = new Publication();
$publication->delete($_GET['id']);

header('Location: ../App/Admin/Articles');