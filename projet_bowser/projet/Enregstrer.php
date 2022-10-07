<?php
session_start();
try {
    $bdd = new PDO('mysql:host=217.160.41.177:6033;dbname=retro_game;charset=utf8', 'root', 'CaGratte28000');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
} catch(Exception $e) {
    die('Erreur: '.$e->getMessage());
}
if(isset($_POST['Envoyer'])) {
    
    if(!empty($_POST['email']) and !empty($_POST['pwd']) and !empty($_POST['adresse'])
        and !empty($_POST['prenom']) and !empty($_POST['nom'])) {
        $email = htmlspecialchars($_POST['email']);
        $pwd = sha1($_POST['pwd']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        $createUser = $bdd->prepare('INSERT INTO users(email, pwd, adresse, prenom, nom)VALUES(?, ?, ?, ?, ?)');
        $createUser->execute(array($email, $pwd, $adresse, $prenom, $nom));
        echo('Enregistrement ok');

        $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ? AND pwd = ?');
        $recupUser->execute(array($email, $pwd));
        if($recupUser->rowCount()>0) {
        
        $_SESSION['email'] = $email;
        $_SESSION['pwd'] = $pwd;
        $_SESSION['id'] = $recupUser->fetch()['id'];
        header('Location:index.php');
    }

    }else{
        echo ('Veuillez remplir tous les champs');
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <title class="title">Inscription</title>
</head>
<body>
    <?php include_once('En-tete.php') ?>
    <form method="POST" action="Enregstrer.php">
        <input type="email"  name="email" autocomplete="off">Email</input>
        <br/>
        <input type="password" name="pwd" autocomplete="off">Mot de passe</input>
        <br/>
        <input type="text" name="adresse" autocomplete="off">Adresse</input>
        <br/>
        <input type="text" name="prenom" autocomplete="off">Prénom</input>
        <br/>
        <input type="text" name="nom" autocomplete="off">Nom</input>
        <br/>
        <button type="submit" name="Envoyer">Envoyer</button>
    </form>
    <?php include_once('Pied.php') ?>
</body>
</html>