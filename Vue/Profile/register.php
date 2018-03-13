
<div class="main" id="start">
    <div class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 mx-auto">
                    <h1>Créer un compte</h1>
                    <form class="form-signin" id="register" method="POST" action="../Functions/register.php">
                        <label for="email" class="sr-only">Adresse email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Adresse email" required autofocus>

                        <label for="nom" class="sr-only">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Votre nom" required>

                        <label for="prenom" class="sr-only">Prénom</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Votre prénom" required>

                        <label for="password" class="sr-only">Mot de passe</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe" required>

                        <label for="passwordConfirm" class="sr-only">Mot de passe</label>
                        <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control" placeholder="Confirmez le mot de passe" required>

                        <button class="btn btn-success" type="submit" value="submit" name="register">Créer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>