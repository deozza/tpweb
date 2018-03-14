<?php
include_once '../../../Modele/Publication.php';
include '../../../Vue/base.php';
$publications = new Publication();
$publications= $publications->getAll();
if($publications){
?>
<div class='container-fluid text-center'>

<h1>Liste des articles</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Titre</th>
        <th scope="col">Supprimer</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($publications as $row) {
        $url = "../../article?id=".$row['id'];
        ?>
        <tr>
            <th scope="row"><?php echo $row['id'] ?></th>
            <td><a href="<?php echo $url ?>"><?php echo $row['titre'] ?></a> </td>
            <td><a class="btn btn-danger" href="<?php echo "../../../Functions/deletePublication.php?id=".$row['id'] ?>">Supprimer</a>
        </tr>
        <?php
    }
}else{
    echo "<h1>Il n'y a pas d'articles entregistrés</h1>";
    }
  ?>
  </tbody>
</table>

<a href="../Articles/insert" class="btn btn-success text-center">Ajouter un article</a>
</div>