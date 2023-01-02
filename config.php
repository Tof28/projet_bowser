<?php
session_start();
try {
    $bdd = new PDO('mysql:localhost;dbname=retro_game;charset=utf8', 'root', '4kCjw&AHS#7xY47xdVjs');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
} catch(Exception $e) {
    die('Erreur: '.$e->getMessage());
}
?>