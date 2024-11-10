<?php
$servername = "localhost";
$user = "DieAmine"; // Corrigé : utiliser $user pour le nom d'utilisateur
$password = "Clinique";
$dbname = "DA_Clinique";
$message = ""; // Initialisez la variable $message avec une chaîne vide

try {
    // Connexion au serveur MySQL
    $bdd = new PDO("mysql:host=$servername", $user, $password); // Utilisation de $user
    // Définir le mode d'erreur PDO sur Exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Création de la base de données si elle n'existe pas
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $bdd->exec($sql);

    // Connexion à la base de données nouvellement créée
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password); // Utilisation de $user
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Création de la table si elle n'existe pas
    $table = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255),
        email VARCHAR(255),
        password VARCHAR(255),
        confirm VARCHAR(255),
        date DATE
    )";
    $bdd->exec($table);

} catch (PDOException $e) {
    $message = "Database connection error: " . $e->getMessage();
}
