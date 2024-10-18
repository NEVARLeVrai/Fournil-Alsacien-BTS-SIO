<?php
    $servername = "mysql"; // Nom du serveur de base de données
    $user = "root"; // Nom d'utilisateur de la base de données
    $pass = "root"; // Mot de passe de la base de données
    $db = "Fournil"; // Nom de la base de données à laquelle se connecter

    try {
        // Création d'une nouvelle instance de PDO pour établir la connexion à la base de données
        $pdo = new PDO("mysql:host=$servername;dbname=$db;charset=UTF8", $user, $pass);

        // Désactivation de l'utilisation de la requête mise en cache pour permettre le streaming des résultats
        $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    } catch(PDOException $error) {
        echo "Erreur : " . $error->getMessage();
    }
?>