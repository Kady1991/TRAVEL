

<?php 
            $errr_l="";
            session_start();
            include_once './base/b_d.php';
            if(isset($_POST['inscription'])) { 
                echo " ccc";
                    if (!empty($_POST['email']) && !empty($_POST['password'])) {
                        $firstname = trim(htmlspecialchars($_POST['nom']));
                        $lastname = trim(htmlspecialchars($_POST['prenom']));
                        $email = trim(htmlspecialchars($_POST['email']));
                        $password = trim(htmlspecialchars($_POST['password']));
                        $requete = "
            
                        INSERT INTO  user_voyage
            
                        VALUES
            
                            (NULL,   :firstname,  :lastname, :email, sha2(:password, 256));
                        ";
                        $objet =$database->prepare($requete);
                        $options= array(
                            ":firstname" => $firstname,
                            ":lastname" => $lastname,
                            ":email" => $email,
                            ":password" => $password
                        );
                            if ($objet ->execute ($options)){
                            header('Location:acceuil.php');
                        }
                        else {
                            $errr_l="<p> connexion  NON validee</p>";
                        }
                    }
            }
            ?>
            <?php 
            



    // var_dump($_POST['check']);
    $message = "";
    if (isset($_POST['connexion'])) {

        if (empty($_POST['email']) || empty($_POST['password'])) {

            $message = "<span>All fields are required</span>";
        } else {
            // Création de la requête
            $query = "SELECT * FROM user_voyage WHERE email = :email AND password = sha2(:password, 256)";
            
            $objet = $database->prepare($query);
            
            $objet->execute(
                array(
                    ":email" => $_POST['email'],
                    ":password" => $_POST['password']
                    )
                );
                
                $count = $objet->rowCount();
                $arrayResult = $objet->fetchAll(PDO::FETCH_ASSOC);
                var_dump($count);

            if ($count > 0) {

                // Ajouter des variables session 

                $_SESSION['id'] = $arrayResult[0]['id'];
                $_SESSION['email'] = $arrayResult[0]['email'];

                
                header('Location:acceuil.php');
            }
        }
    }

    ?>




        
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <link rel="stylesheet" href="../asset/CSS/inscription.css" />
                <script src="../asset/JS/inscription.js" defer></script>
                <title>formulaire</title>
            </head>
            <body>
                <div class="container">
                    <nav>
                        <a href="#" class="logo" id="logo">travelink</a>
                        <ul>
                            <li class="nav-item">
                                <button type="button" , role="button" class="btn" id="displayForm">Se Connecter</button>
                            </li>
                        </ul>
                    </nav>

                    <section>
                        <div class="sec-container">
                            <div class="formWrapper">
                                <div class="card">
                                    <div class="card-header">
                                        <div id="forLogin" class="form-header active">Se connecter</div>
                                        <div id="forRegister" class="form-header">S'inscrire</div>
                                    </div>
                                    <div class="card-body" id="formContainer">
                                        <!-- Formulaire d'connexion -->
                                        <form action="index.php" id="loginForm" method="POST">
                                            <input type="email" class="form-control" placeholder="@Utilisateur"   name="email" />
                                            <input type="password" class="form-control" placeholder="Mot de passe"  name="password"/>
                                            <label for="remember">
                                                <input type="checkbox" class="form-check" id="remember" />
                                                Se Souvenir de moi
                                            </label>
                                            <button class="formButton" name="connexion">Connexion</button>
                                        </form>
                                        <!-- Formulaire d'INSCRIPTION -->
                                        <form action="index.php" id="registerForm" class="toggleForm" method="POST">
                                            <input type="text" class="form-control" placeholder="nom." name="nom"/>
                                            <input type="text" class="form-control" placeholder="prénom." name="prenom"/>
                                            <input type="email" class="form-control" placeholder=" email"  name=" email" />
                                            <input type="password" class="form-control" placeholder=" mot de passe..."    name="password"/>
                                            <label for="remember">
                                                <input type="checkbox" class="form-check" id="privacy" />
                                                J'accepte les termes de l'accord
                                            </label>
                                            <button class="formButton" name="inscription">Inscription</button>
                                            <p><?php echo "$errr_l" ?></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </body>
        </html>