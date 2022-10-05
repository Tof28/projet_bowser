<?php
try {
  $bdd = new PDO('mysql:host=217.160.41.177:6033;dbname=retro_game;charset=utf8', 'root', 'CaGratte28000');
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="En-tete.php"></a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<ul><h3>Derniers ajouts</h3>
                <div><strong>Assassin</strong> <img src="home/formation/projet_bowser/projet_bowser/img/Assassin.png"></div>
                <div><strong>Revenge</strong><img src="home/formation/projet_bowser/projet_bowser/img/revenge.jpg"></div>
                <div><strong>Michel Nukem</strong><img src="home/forùation/projet_bowser/projet_bowser/Michel_Nukem.png"></div>

</body>
</html>
