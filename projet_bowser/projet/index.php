<?php
session_start();
echo $_SESSION['email'];
try {
    $bdd = new PDO('mysql:host=217.160.41.177:6033;dbname=retro_game;charset=utf8', 'root', 'CaGratte28000');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    die('Erreur: '.$e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="pragma" content="no-cache" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Retro game - Accueil</title>
    </head>
    <body>
        <?php include_once ('En-tete.php') ?>
        <div class="Haut de page"></div>
        <div class="latest">
            <ul><h2>Derniers ajouts</h2>
                <li><h3>Assassin</h3></li>
                <li><h3>Revenge</h3></li>
                <li><h3>Michel Nukem</h3></li>    
            </ul>
        </div>
        
        <img class="logo" src="projet_bowser/img/RetroGame.png">
        <?php include_once ('Pied.php')?>
    </body>
</html>