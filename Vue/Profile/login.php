<div class="main" id="start">
    <div class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 mx-auto">
                    <h1>Se connecter</h1>
                    <?php
                        if(isset($_GET['erreur']) && $_GET['erreur'] == 'invalide'){
                            echo "<p class='text-danger'>Les identififiants sont invalides</p>";
                        }
                    ?>
                    <form class="form-signin" id="login" method="POST" action="../Functions/login.php">
                        <label for="email" class="sr-only">Adresse email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Adresse email" required autofocus>

                        <label for="password" class="sr-only">Mot de passe</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe" required>

                        <button class="btn btn-success" type="submit" value="submit" name="login">Se connecter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
