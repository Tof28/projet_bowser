<?php
/*function ajouter($title, $synopsis, $price)
    {
        if(require("Connexion.php"))
        {
            $recup = $access->prepare('INSERT INTO orders(title, synopsis, price) VALUES($title $synopsis, $price)');
        
        $recup->exec(array($title, $synopsis, $price));

        $recup->closeCursor();
        }
    }
function afficher()
{
    if(require("Connexion.php"))
    {
        $req = $access->prepare('SELECT * FROM products ORDER BY register_date DESC');
   
        $req->exec();
        
        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->CloseCursor();

    }
}
function supprimer($id)
{
    if(require("Connexion.php"))
    {
        $req=$access->prepare('DELETE $ FROM PRODUCTS WHERE id=?');

        $req->exec(array($id));
    }
}*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Commandes</title>
</head>
<body>
    <?php include_once 'En-tete.php' ?>
    
    
    <?php include_once 'Pied.php'?>
</body>
</html>