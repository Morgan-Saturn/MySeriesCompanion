<?php

function connect() {
    $hote = 'localhost';
    $my_series_companion = 'myseriescompanion';
    $utilisateur = 'root';
    $mdp = '';
    try {
        $connexion_bdd = new PDO("mysql:host=$hote;dbname=$my_series_companion;charset=utf8",$utilisateur, $mdp);

        $connexion_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion_bdd;
    } catch (PDOException $e) {
        echo "Echec de la connexion à la base de données : " . $e->getMessage();
    }
    return false;
}