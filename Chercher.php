<?php
session_start();
try {
  $bdd = new PDO('mysql:localhost:6033;dbname=retro_game;charset=utf8', 'root', 'CaGratte28000');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
    <title>Search</title>
</head>
<body>
<?php include_once 'En-tete.php' ?>

  <ul>
    <h3>Derniers ajouts</h3>
      <div><strong>Assassin</strong> <img src="projet_bowser/img/Assassin.png"></div>
      <div><strong>Revenge</strong><img src="projet_bowser/img/revenge.jpg"></div>
      <div><strong>Michel Nukem</strong><img src="projet_bowser/Michel_Nukem.png"></div>
    </ul>   
    
    <?php include_once 'Pied.php'?>

</body>
</html>
