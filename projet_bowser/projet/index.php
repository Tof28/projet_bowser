
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Retro game - Accueil</title>
    </head>

    <body>
        <header>
            <link href="En-tete.php">
        </header>
            <ul><h4>Derniers ajouts</h4>
                <li>Assassin</li>
                <li>Revenge</li>
                <li>Michel Nukem</li>

            
            </ul>
    </body>
</html>