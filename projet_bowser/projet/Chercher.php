<?php
$requete = $bdd->prepare("SELECT title FROM products;");
$requete->execute();

while($donnees = $requete->fetch()){
    echo $donnees['title']."<br />";

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
    <a class="navbar-brand">Navbar</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
</body>
</html>
