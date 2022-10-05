<?php
session_start();
/*
try {
    $checkDb = $bdd->prepare('SELECT pwd FROM users WHERE email = ?');
    $checkDb->exec(array($email));
    $datas =  $checkDb->fetch();
    $hashPwd = hash('sha256', $pwd);
}catch(Exception $e) {
    echo 'Erreur ! '.$e->getMessage();
    print_r($datas);
}
if($datas[1]=$hashPwd) return true;
*/
try {
    $bdd = new PDO('mysql:host=217.160.41.177:6033;dbname=retro_game;charset=utf8', 'root', 'CaGratte28000');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    die('Erreur: '.$e->getMessage());
}
if(isset($_POST['Envoyer'])) {
    if(!empty($_POST['email']) and !empty($_POST['pwd'])) {
        $email = htmlspecialchars($_POST['email']);
        $pwd = sha1($_POST['pwd']);
        $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ? AND pwd = ? ');
        $recupUser-> execute(array($email, $pwd));
        if($recupUser ->rowCount()>0) {
            $_SESSION['email'] = $email;
            $_SESSION['pwd'] = $pwd;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            header('Location :Compte.php');
        }else{
            echo 'email ou mot de passe incorrect';
        }
    }else {
        echo "Veuillez remplir tous les champs";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <form method="POST" action="Connexion.php">
        <input type="email" name="email" class="email" autocomplete="off">Email</input>
        <br>
        <input type="password" name="pwd" class="pwd" autocomplete="off">Mot de passe</input>
        <br>
        <button type="submit" name="Envoyer">Envoyer</button>
    </form>
</body>
</html>