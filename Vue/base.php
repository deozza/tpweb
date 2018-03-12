<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>TP Blog</title>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="./">TP Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="./">Index</a>
            </li>
            <?php
            if(isset($_SESSION['privilege'])){
                if($_SESSION['privilege'] == 3){
                    echo"
                 <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/tpweb/App/Admin/Utilisateurs\">Les utilisateurs</a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/tpweb/App/Admin/Articles\">Gérer les articles</a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/tpweb/App/Admin/profile.php\">Mon profile</a>
                </li>
                ";
                }elseif ($_SESSION['privilege'] == 2){
                    echo"

                 <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/tpweb/App/Redacteur/Articles\">Ajouter articles</a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/tpweb/App/Redacteur/profile.php\">Mon profile</a>
                </li>
                ";
                }elseif ($_SESSION['privilege'] == 1) {
                    echo "
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/tpweb/App/Membre/profile.php\">Mon profile</a>
                </li>
                ";
                }
                echo "
                 <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/tpweb/App/logout.php\">Se déconnecter</a>
                </li>
                ";

            }else{
                echo"
                 <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"./login\">Se connecter</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"./register\">Créer un compte</a>
                </li>
                ";
            }
            ?>


        </ul>
    </div>
</nav>

<body>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>