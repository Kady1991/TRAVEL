<?php
    $server = "mysql";
    $host = "localhost";
    $dbname = "voyage";
    $charset = "utf8";

    $dsn = "$server:host=$host;dbname=$dbname;charset=$charset";
    $username = "root";
    $password = "";

    try {
        $database = new PDO($dsn, $username, $password);
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $database;
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
?>