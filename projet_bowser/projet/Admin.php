<?php
session_start();
try {
    $bdd = new PDO('mysql:host=217.160.41.177:6033;dbname=retro_game;charset=utf8', 'root', 'CaGratte28000');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(Exception $e) {
    die('Erreur: '.$e->getMessage());
}
if(isset($_POST['Envoyer'])) {
    if(!empty($_POST['pseudo']) and !empty($_POST['pwd'])) {
        $pseudo_par_defaut = "admin";
        $pwd_par_defaut = "admin1234";
        $pseudo_saisi = htmlspecialchars(($_POST['pseudo']));
        $pwd_saisi = htmlspecialchars($_POST['pwd']);
        if ($pseudo_saisi == $pseudo_par_defaut and $pwd_saisi == $pwd_par_defaut) {
            $_SESSION['pwd'] = $pwd_saisi;
            header('Location: ./index.php');
        }else{
            echo "Votre mot de passe ou votre pseudo est incorrect";
        }
    }else{
        echo "Veuillez remplir tous les champs";
    }
}    
ob_flush();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Espace admin</title>
</head>
<body>
    <?php include_once('En-tete.php') ?>

    <form method="POST" action="Admin.php">
            <input type="text" name="pseudo" autocomplete="off">pseudo</input>
            <br>
            <input type="password" name="pwd" class="pwd" autocomplete="off">Mot de passe</input>
            <br>
            <button type="submit" name="Envoyer">Envoyer</button>
            
    </form>
    <?php include_once('Pied.php') ?>
</body>
</html>