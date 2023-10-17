<?php  


// On déclare la variable en dehors du if
$messageError = "";

// Si le bouton est déclenché alors les instructions se lance
    if (isset($_POST['login'])) {
        
        // Si les champs email et password ne sont pas vide alors les instructions se lance
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            
            include_once '../base/b_d.php';
            
            // Selectionne les donées déjà présente dans la base de données pour ensuite pouvoir les comparés avec les valeurs inseré 
            $requete = "SELECT * FROM 
                           user_voyage
                        WHERE 
                            email = :email 
                        AND
                            password = sha2(:password, 256)
            ";

            $objet = $database->prepare($requete);

            $objet->execute(
                array(
                    ":email" => $_POST['email'],
                    ":password" => $_POST['password']
                )
            );

            // La flèche (->) est utilisée pour accéder aux propriétés et aux méthodes d'un objet en PHP. C'est l'opérateur d'accès aux membres d'objet.

            // L'opérateur =>, en revanche, est principalement utilisé pour associer des clés et des valeurs dans les tableaux associatifs (tableaux où les clés sont des chaînes de caractères plutôt que des indices numériques).
            
            // Il va chercher les éléments de la table en fonction des informations donné dans les champs email et password du formulaire
            $compteur = $objet->rowCount();

            // Accueillir les informations récuperer dans la base de données dans une variable sous la forme d'un tableau

            // fetchAll demande de TOUT récuperer contrairement au fetch qui s'arrête au premier élément

            // FETCH_ASSOC Empêche l'affichage systématique de l'index de chaque élément récuperer depuis la base de données
            $arrayResult = $objet->fetchAll(PDO::FETCH_ASSOC);

            if ($compteur > 0) {

                // Création des variables Session qui vont suivre sur chacune des pages du site tant que l'utilisateur est connecté

                // à gauche les variables session que nous créons
                // à droite les résultats de notre tableau à l'index 0. Attention le nom entre [] doit être le même que celui de la table dans la base de données.
                $_SESSION['email'] = $arrayResult[0]['email'];
                $_SESSION['lastname'] = $arrayResult[0]['lastname'];
                $_SESSION['firstname'] = $arrayResult[0]['firstname'];

                header('Location:destination.php');
            } 
            else {
            $messageError = "<span> Email/Mot de passe incorrect.</span>";
            }
        } 
        else {
            $messageError = "<span> Tous les champs doivent être complèter.</span>";
        }

    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/connexion.css">
    <title> page connexion</title>
</head>
<body>
    <section>
        <div class="imgbox"></div>
        <div class="contenatbox">
            <div class="formbox">
                <h2> connexion </h2>
                <form action="connexion.php" method="POST">
                    <div class="inputbx">
                      <label for="email">Adresse email :</label>
                      <input type="email" name="email" id="email">
                    </div>
                    <div class="inputbx">
                       <label for="password">Mot de passe :</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="inputbx">
                        <input type="submit" id="btn" name="login">
                    </div>
                    <div class="inputbx">
                        <p> vous n'avez pas de compte? <a href="inscription.php"> inscription</a></p>
                    </div>
                 </form>
            </div>
        </div>
    </section>
</body>
</html>