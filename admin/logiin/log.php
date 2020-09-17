<?php
    // On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site
    $login_valide = "yassine";
    $pwd_valide = "yassine";

    // on teste si nos variables sont définies
    if (isset($_POST['login'])){

        // on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
        if ($login_valide == $_POST['name'] && $pwd_valide == $_POST['pwd']) {
            // dans ce cas, tout est ok, on peut démarrer notre session

            // on la démarre :)
            session_start ();
            // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['pwd'] = $_POST['pwd'];

            // on redirige notre visiteur vers une page de notre section membre
            header ('location: ../pageadmin.php');
        }
        else { // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
            //  echo '<script> alert("kjdcjkkjkjj")</script>';
              // puis on le redirige vers la page d'accueil 
              echo '<meta http-equiv="refresh" content="0;URL=login.php">'; }
    }
    else {
        echo 'Les variables du formulaire ne sont pas déclarées.';
    }
    ?>
