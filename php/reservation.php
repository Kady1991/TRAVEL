<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Travelink</title>
            <!-- style formulaire de reservation -->
            <link rel="stylesheet" href="../asset/CSS/reservation.css">

            <!-- Css link -->
            <link rel="stylesheet" href="../asset/CSS/styleMenu.css">
            <link rel="stylesheet" href="../asset/CSS/styleHome copy.css">
            <!-- <link rel="stylesheet" href="../asset/CSS/style-formu.css">
            <link rel="stylesheet" href="../asset/CSS/coment.css"> -->

            <!-- Bootstrap Link -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                crossorigin="anonymous">
            <!-- Bootstrap Link -->


            <!-- Font Awesome Cdn -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
            <!-- Font Awesome Cdn -->


            <!-- Google Fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
            <!-- Google Fonts -->
        </head>

        <body>

            <!-- Navbar Start -->
            <nav class="navbar navbar-expand-lg sticky-top" id="navbar">

                <div class="container">

                    <a class="navbar-brand" href="HOME2.php" id="logo"><img class="logo" src="../image/logo.png"
                            alt=""></a>
                    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                        <span><i class="fa-solid fa-bars"></i></span>
                    </button>

                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="HOME2.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="reservation.php">Reservation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#packages">Destination</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">A propos</a>
                            </li>
                        </ul>

                        <form class="d-flex">
                            <!-- <input class="form-control me-2" type="text" placeholder="Search"> -->
                            <!-- <button class="btn btn-primary" type="button">Déconnexion</button> -->
                            <button id="about-btn">Déconnexion</button>
                        </form>
                    </div>

                </div>
            </nav>
    <body>
        <section class="contentDES">
        <div class="globali">
            <div class="imgre">
                <img id="destination-image" src="../image/imgActivite/maldi3.jpg"  alt="Destination Image">
            </div>
            <div class=" perso">
                <div class="main-text">
                    <h1><span></span>Formulaire de réservation </h1>
                </div>
                <form action="code-reservation.php" method="Post"  class="formR">
                    <div class="boxi"> 
                    <div class="coli">

                        <!-- <select name="destination" id="destination" required>
                            <option   name="destination"    value="destination">Destination</option>
                            <option      name="destination"   value="Maldives" >Maldives</option>
                            <option      name="destination"   value="Zanzibar" >Zanzibar</option>
                            <option     name="destination"     value="Ecosse" >Ecosse</option>
                        </select> -->


                        <select name="destination" id="destination" required>
                            <option value="destination" data-image="../">Destination :</option>
                            <option value="Maldives" data-image="../image/ACT/maldi3.jpg">Maldives</option>
                            <option value="Zanzibar" data-image="../image/zanzi.jpg.">Zanzibar</option>
                            <option value="Ecosse" data-image="../image/ecosse2.jpg">Ecosse</option>
                            </select>
                        </div>
                        <div class="coli">
                        <select name="genre" id="genre">
                            <option name="genre"  value="Genre">Genre</option>
                            <option  name="genre" value="femme">Femme</option>
                            <option name="genre"  value="homme">Homme</option>
                        </select>
                                <!-- <input type="hidden" name="totalParticipants" value="<?php echo $totalParticipants; ?>">
                                <input type="hidden" name="totalHommes" value="<?php echo $totalHommes; ?>">
                                <input type="hidden" name="totalFemmes" value="<?php echo $totalFemmes; ?>">  -->
                    </div>
                        <div class="coli"> <input type="text" placeholder="Nom" name="nom"/></div>
                        <div class="coli"><input type="text" placeholder="Prénom" name="prénom"/></div>
                        <div class="coli"><input type="date" placeholder="Date de naissance " name="date_naissance"/>
                    </div>
                    <div class="coli"><input type="email" placeholder=" Adresse mail" name="email"/></div>

                        <div class="coli">  <input type="tel" placeholder=" Tel" name="tel"/></div>
                        <div class="coli"><input type="text" placeholder="Adresse postal" name="adresse_postal"/></div>
                        </div>
                        <div class="MODe">
                            <p>Mode de paiement :</p>
                            <div > <img class="pay" src="../image/visa.png" width="40px" alt=""><input type="radio" id="visa" name="paiement" value="visa"></div>
                            <div><img class="pay" src="../image/paypal (1).png" width="40px" alt=""><input type="radio" id="PayPal" name=" paiement" value="paypall"></div>  
                        </div>
                    <div class="butta"> <button name="soumettre">Soumettre</button></div>
                </form>
            </div>
        </div>
    </section>
    <script>
            document.addEventListener("DOMContentLoaded", function() {
                const destinationSelect = document.getElementById("destination");
                const destinationImage = document.getElementById("destination-image");

                destinationSelect.addEventListener("change", function() {
                    const selectedOption = destinationSelect.options[destinationSelect.selectedIndex];
                    const imagePath = selectedOption.getAttribute("data-image");
                    destinationImage.src = imagePath;
                });
            });
            </script>




            <!-- Footer Start -->
            <footer id="footer">
                <h1><a href="HOME2.php"><img src="../image/logo.png" alt=""></a></h1>
                <p>Un voyage milles rencontre</p>
                <div class="social-links">
                    <!-- <i class="fa-brands fa-twitter"></i> -->
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-pinterest-p"></i>
                </div>
                <div class="credit">
                    <p>Produit <a href="https://www.bruxellesformation.brussels/annuaire/interface3/" style="color:#ff6600"  target="_blank"> Interface 3 </a></p>
                </div>
                <div class="copyright">
                    <p>&copy;Copyright Interface 3. Tout droits reservés</p>
                </div>
            </footer>
            <!-- Footer End -->

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>


    </body>
    </html>