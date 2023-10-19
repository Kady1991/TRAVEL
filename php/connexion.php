<?php 
            // $errr_l="";
            session_start();
            include'../base/b_d.php';
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

                
                header('Location:HOME2.php');
            }
        }
    }

    ?>