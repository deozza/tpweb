<?php
include_once '../../../Modele/User.php';
include '../../../Vue/base.php';
$users = new User();
$users= $users->getAll();
if($users){
?>

<div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Suppression de l'utilisateur</h5>
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

<h1 class="text-center">Liste des utilisateurs</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Email</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Modifier</th>
        <th scope="col">Supprimer</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($users as $row) {
        ?>
        <tr>
            <th scope="row"><?php echo $row['id'] ?></th>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['nom'] ?></td>
            <td><?php echo $row['prenom'] ?></td>
            <td><a href="" class="btn btn-warning">Modifier</a></td>
            <td><a class="btn btn-danger"data-toggle="modal" data-target="#deleteUser">Supprimer</a></td>
        </tr>
        <?php
    }
}else{
    echo "<h1>Il n'y a pas d'utilisateurs entregistrés</h1>";
    }
  ?>
  </tbody>
</table>