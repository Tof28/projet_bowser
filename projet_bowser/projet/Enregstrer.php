<?php
ini_set('error_reporting', E_ALL);
try {
    $bdd = new PDO('mysql:host=217.160.41.177:6033;dbname=retro_game;charset=utf8', 'root', 'CaGratte28000');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    die('Erreur: '.$e->getMessage());
}
if(isset($_POST['envoi'])) {
    if(!empty($_POST['email']) AND !empty($_POST['pwd']) AND !empty($_POST['adresse'])
    AND !empty($_POST['prenom']) AND !empty($_POST['nom'])) {
        $email = htmlspecialchars($_POST['email']);
        $pwd = sha1($_POST['pwd']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        $createUser = $bdd->prepare('INSERT INTO users(email, pwd, adresse, prenom, nom)VALUES(?, ?, ?, ?, ?)');
        $createUser->execute(array($email, $pwd, $adresse, $prenom,$nom));
        echo('Enregistrement ok');
    }else{
        echo 'Veuillez remplir tous les champs';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
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
</body>
</html>