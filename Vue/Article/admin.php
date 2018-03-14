<?php
include_once '../../../Modele/Publication.php';
include '../../../Vue/base.php';
$publications = new Publication();
$publications= $publications->getAll();
if($publications){
?>
<div class='container-fluid text-center'>
<div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Suppression de l'article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Êtes vous sur de vouloir le supprimer ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Confirmer</button>
            </div>
        </div>
    </div>
</div>

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
            <td><a class="btn btn-danger"data-toggle="modal" data-target="#deleteUser">Supprimer</a></td>
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