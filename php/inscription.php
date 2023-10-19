<?php 
            $errr_l="";
            session_start();
            include'../base/b_d.php';
            if(isset($_POST['inscription'])) { 
                // echo " ccc";
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
                            header('Location:HOME2.php');
                        }
                        else {
                            $errr_l="<p> connexion  NON validee</p>";
                        }
                    }
            }
            ?>