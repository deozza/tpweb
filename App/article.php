<?php
include_once '../Modele/Publication.php';
include_once '../Modele/User.php';
include '../Vue/base.php';

$publication = new Publication();
$auteur = new User();
$publication = $publication->findById($_GET['id']);
$auteur = $auteur->getInfos($publication['auteur']);
$image = "../Web/img/".$publication['image'];
?>
<div class="container-fluid">
    <h1 class="text-center"><?php echo $publication['titre'] ?></h1>
    <a href="<?php echo $image ?>"><img src="<?php echo $image ?>" class="text-center" alt="<?php echo $publication['titre'] ?>"/></a>
    <?php echo $publication['corps'] ?>
    <small>Rédigé par <?php echo $auteur['nom'].' - '.$auteur['prenom'] ?></small>
</div>

