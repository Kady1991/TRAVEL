    <?php
        session_start();
        if (isset($_POST['soumettre'])) { 
            if (!empty($_POST['email']) ) {
                $Desti = trim($_POST['destination']);
                $G= trim($_POST['genre']);
                $N = trim($_POST['nom']);
                $P= trim($_POST['prénom']);
                    $D= trim($_POST['date_naissance']);
                    $email = trim($_POST['email']);
                    $tel = trim($_POST['tel']);
                    $adress = trim($_POST['adresse_postal']);
                    $paiement = trim($_POST['paiement']);
                    include './base/b_d.php';
                    $sql = "
                    INSERT INTO  
                        user_reserveé
                    VALUES
                        (NULL,  :destination ,:genre , :nom ,  :prenom , :date_naissance ,  :email  , :tel ,
                        :adress_postal , :mode_paiement );
                        ";
                    $objet = $database->prepare( $sql);
                    $option = array(
                    ":destination" =>$Desti,
                    ":genre"=>$G ,
                    ":nom" =>  $N,
                    ":prenom"=>  $P,
                    ":date_naissance"=>$D ,
                    ":email"=>  $email,
                    ":tel"=> $tel,
                    ":adress_postal"=> $adress ,
                    ":mode_paiement"=>$paiement 
                    );
                    if ($objet->execute($option))
                        {
                        echo"<p> connexion validee</p>";

                        // header('Location:fiche.php');
                        }
                    else {
                        echo"<p> connexion  NON validee</p>";
                    }
                }

            
                }
    ?>