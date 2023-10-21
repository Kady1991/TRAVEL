<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $nom = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Effectuer des opérations de traitement ou de validation sur les données reçues

    // Se connecter à la base de données
    $serveur = "localhost";
    $utilisateur = "root";
    $motdepasse = "";
    $basededonnees = "voyage";
    $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

    // Vérifier la connexion à la base de données
    if ($connexion->connect_error) {
        die("Erreur de connexion à la base de données : " . $connexion->connect_error);
    }

    // Préparer la requête SQL d'insertion
    $requete = $connexion->prepare("INSERT INTO user_contact(nom, email, message) VALUES (?, ?, ?)");
    $requete->bind_param("sss", $nom, $email, $message);

    // Exécuter la requête SQL
    if ($requete->execute()) {
        // Afficher un message de confirmation à l'utilisateur
        echo "Merci " . $nom . " de nous avoir contactés. Votre message a été enregistré avec succès dans la base de données.";
    } else {
        // Afficher un message d'erreur si l'insertion a échoué
        echo "Une erreur est survenue lors de l'enregistrement du message dans la base de données.";
    }

    // Fermer la connexion à la base de données
    $requete->close();
    $connexion->close();
}
?>