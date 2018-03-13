<?php
if(isset($_SESSION['id'])){
    include_once '../../Modele/Publication.php';

}else{
    include_once '../Modele/Publication.php';
}

$publications = new Publication();
$publications->getAll();

echo "<h1 class=\"text-center\">Liste des articles</h1>
    <div class=\"section-with-space text-center section-start\" >
    <div class=\"container\">";
if(!$publications){
    echo "<p>Aucune publication</p>";
}else{

    foreach ($publications as $publication){
        ?>
        <div class="text-justify">
            <h1><a href="" ><?php echo $publication['titre'] ?></a></h1>
        </div>
        <?php
    }
}
echo "</div></div>"
?>
