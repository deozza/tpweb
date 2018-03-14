<?php
include_once '../../../Modele/User.php';
include '../../../Vue/base.php';
$users = new User();
$users= $users->getAll();
if($users){
?>

<h1 class="text-center">Liste des utilisateurs</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Email</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
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
            <td><a class="btn btn-danger" href="<?php echo "../../../Functions/deleteUser.php?id=".$row['id'] ?>">Supprimer</a>
            </td>
        </tr>
        <?php
    }
}else{
    echo "<h1>Il n'y a pas d'utilisateurs entregistrés</h1>";
    }
  ?>
  </tbody>
</table>