<?php
session_start();
try {
    $bdd = new PDO('mysql:localhost:6033;dbname=id19688955_retro_game;charset=utf8', 'root', '4kCjw&AHS#7xY47xdVjs');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
} catch(Exception $e) {
    die('Erreur: '.$e->getMessage());
}
?>