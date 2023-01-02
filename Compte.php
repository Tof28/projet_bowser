<?php 
session_start();
if(!$_SESSION['pwd']) {
    header('Location: Connexion.php');
}
try {
    $bdd = new PDO('mysql:localhost:8080;dbname=retro_game;charset=utf8', 'root', 'CaGratte28000');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ('connexion ok');
} catch(Exception $e) {
    die('Erreur: '.$e->getMessage());
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Compte</title>
</head>
<body>
    <?php include_once ('En-tete.php') ?>
        <p>
            <strong>Bonjour</strong>
            <nav>
                <ul>
                    <liInformations personnelles> 
                        <?php 
                            ('SELECT * FROM users WHERE email = ? AND pwd = ?'); 
                    ?></li>
                    <li>Commandes</li>
                    <li>Mes paramètres</li>
                    <span><a href="<?= $this->url('logout.php');?>">Déconnexion</span>
                </ul>
            </nav>
        </p>  
    <?php include_once ('Pied.php')?>
</body>
</html>