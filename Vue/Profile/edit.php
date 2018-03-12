<?php
include_once '../../Modele/User.php';
include '../../Vue/base.php';
$user = new User();
$userInfos = $user->getInfos($_SESSION['id']);

    ?>

    <div class="main" id="start">
        <div class="section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-6 mx-auto">
                        <h1>Editer le profile</h1>
                        <form class="form-signin" id="edit" method="POST" action="/tpweb/Functions/editProfile.php">
                            <label for="email" class="sr-only">Adresse email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Adresse email" value="<?php echo $userInfos['email'] ?>" required autofocus>

                            <label for="nom" class="sr-only">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control" placeholder="Votre nom" value="<?php echo $userInfos['nom'] ?>"
                                   required>

                            <label for="prenom" class="sr-only">Prénom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Votre prénom" value="<?php echo $userInfos['prenom'] ?>"
                                   required>

                            <label for="password" class="sr-only">Mot de passe</label>
                            <input type="password" name="password" id="password" class="form-control"
                                   placeholder="Ancien mot de passe" value="<?php echo $userInfos['password'] ?>" required>

                            <button class="btn btn-success" type="submit" value="submit" name="edit">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>