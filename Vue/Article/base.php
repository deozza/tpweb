<?php

require '../Modele/Publication.php';

$publications = new Publication();
$publications = $publications->getAll();

echo "<h1 class=\"text-center\">Liste des articles</h1>
    <div class=\"section-with-space text-center section-start\" >
    <div class=\"container\">
    <div class=\"row\">";


    foreach ($publications as $publication){
        $url = "article?id=".$publication['id'];
        $image = "../Web/img/".$publication['image'];
        ?>
            <div class="col col-sm-4">
                <a href="<?php echo $url ?>"><img class="img-fluid img-thumbnail"  src="<?php echo $image ?>"></a>
                <h2><?php echo $publication['titre'] ?></h2>
            </div>
        <?php
    }
echo "</div></div></div>"
?>
