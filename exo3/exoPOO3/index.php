<?php

    include 'classConnect.php';
    include 'classUser.php';
    include 'viewusers.inc.php';

    // require('classUser.php');

    // require('classConnect.php');

    // session_start();

    // $bdd=Database::connection();

    // $user= new User();


    // if(isset($_POST['inscription'])){
    //     $reponse= $user->validation($_POST);
    //     echo "Votre inscription est réussie !";
    // }

    // if(isset($_POST['connexion'])){
    //     $result = $user->connectUser($_POST);
    // }
    
    // if ( isset($_POST['editName']) ) {
    //     $isUser=true;
    //     $isMail=false;
    //     $change= $user->editUser($bdd,$isMail,$isUser,$_SESSION['userId']);
    // }

    // if ( isset($_POST['editMail']) ) {
    //     $isUser=false;
    //     $isMail=true;
    //     $change= $user->editUser($bdd,$isMail,$isUser,$_SESSION['userId']);
    // }

    // if ( isset($_POST['deleteUser'])){

    //     $delete = $user->deleteUser($bdd,$_SESSION['userId']);    
    //     if($delete){ echo"Utilisateur supprimé";}  
    // }

    // if ( isset($_POST['disconect']) ){
    //     $disco= $user->deconnectUser($bdd,$_SESSION['userId']);    
    // }

    ?>

    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <link rel="stylesheet" href="style.scss">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Poo DB et Formulaire</title>
    </head>
    <body>

        <?php 
            $users = new ViewUser();
            $users->showAllUsers();
        
        ?>
<!-- 
        <div id="ModifMail">
            <form action='' method='POST'>
                <label>Nouvel email</label>
                <input type='text' name='newMail'>
                <input type='submit' name='editMail'>
            </form>

        </div>

        <div id="ModifName">
            <form action='' method='POST'>
                <label>Nouveau nom</label>
                <input type='text' name='newName'>
                <input type='submit' name='editName'>
            </form>

        </div>


        <div class='choix'>
            <form action='' method='POST'>
                <input type='submit' name='deleteUser' value='Supprimer User'>
                <input type='submit' name='disconnect' value='Déconnecter User'>
                <input type='submit' name='changeName' value="Modifier User" id="btnName">
                <input type='submit' name='changeMail' value='Modifier Email' id="btnMail">
            </form>
        </div>

        <hr>

        <div class="login">
            <form action="" method="POST">
                    <p>Connexion</p>
                <label for="username">Entrez votre nom d'utilisateur</label>
                <input type="text" name="userconnex">

                <label for="password">Entrez votre mot de passe</label>
                <input type="text" name="passconnex">

                <input type="submit" name="connexion" value="Connexion">
            </form>
        </div>

        <hr>

        <div class="register">
            <form action="" method="POST">
                    <p>Inscription</p>
                <label for="email">Entrez votre adresse e-mail</label>
                <input type="text" name="email" id="">

                <label for="username">Entrez votre nom d'utilisateur</label>
                <input type="text" name="username" id="">

                <label for="password">Entrez votre mot de passe</label>
                <input type="text" name="password" > <br>

                <input type="submit" name="inscription" value="register">
            </form>
            
        </div> -->

    </body>
</html>