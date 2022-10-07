<?php
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" cache control  & pragma sert pour le cache >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="pragma" content="no-cache" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Retro game</title>

</head>
<body>
   <nav>
        <ul class="navbar">
            <container class="navbar_titre"><h1>Retro game</h1></container>
                <a class="flex-sm-fill text-sm-center nav-index" href="http://localhost:8082/index.php">Accueil</a>
                <a class="flex-sm-fill text-sm-center nav-chercher" href="http://localhost:8082/Chercher.php">Chercher</a>
                <a class="flex-sm-fill text-sm-center nav-compte" href="http://localhost:8082/Compte.php">Compte</a>
            <div class="navbar_panier">
              <a class="flex-sm-fill text-sm-center nav-commandes" href="http://localhost:8082/Commandes.php"><img src="projet_bowser/img/shopping-bag.png"></a> 
            </div>
            </ul>
   </nav>
</body>
</html>