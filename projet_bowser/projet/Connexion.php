<?php
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
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONNEXION</title>
</head>
<body>
</body>
</html>