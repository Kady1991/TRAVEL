<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelink</title>

    <!-- Css link -->
    <link rel="stylesheet" href="../asset/CSS/styleMenu.css">
    <link rel="stylesheet" href="../asset/CSS/styleHome copy.css">

    <!-- style ajouter kady -->
    <link rel="stylesheet" href="../asset/CSS/Acti-Zanzibar.css">
    <script src="../asset/JS/Modif-DD.js" defer></script>
    


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
            <button class="navbar-toggler bg white" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span><i class="fa-solid fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="HOME2.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#book">Reservation</a>
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


    <header>
        <!-- <div class="logo">
            <a href="index.html"> <span>t</span> ravelink</a>
        </div> -->
        <!-- <a href="#" class="btn-reservation">Réserver Maintenant</a> -->
     
                <!-- acceuil section -->
            <div class="responsive-menu">
                <section id="home"  class="homme1">
                    
                        <!-- <h2>venez jeter l' ancre  avec nous!</h2> -->
                        <h4>Un voyage milles rencontres</h4>
                        <a href="Reservation.php" class="btn-reservation home-btn">Réserver Maintenant</a>
                        <div class="find_trip">
                            <div class="card "  id="card1"><img    id="img1" src="../image/léopard.jpg">
                            <!-- <p>Activité</p> -->
                        </div>
                            <div class="card"  id="card2"><img   id="img2"  src="../image/Images_garstronomie/plazi.jpg">
                            <!-- <P>Gastronomie</P> -->
                        </div>
                            <div class="card" id="card3"><img    id="img3"  src="../image/Images_garstronomie/jolieIles.webp">
                            <!-- <p>Hébergement</p> -->
                        </div>
                        </div >
                    </div>
                </section>
            </div>
    </header>
<!--  debut 1categorie d'activite -->
 <div class="acct1" id="acct1">  
    <div  class="debut" id="debut">
        <div class="header-title">
            <h1 id="Activite">Nos activités au Zanzibar</h1>
            <hr class="divider">
        </div>
    <p>profitez de la mer a votre rythme!</p>
    </div>
    <div class="glob">

        <div class="fixed-text">
            <a href="Acti-Maldive.php" style="color: aliceblue;"><span>A</span>
                <span>C</span>
                <span>T</span>
                <span>I</span>
                <span>V</span>
                <span>I</span>
                <span>T</span>
                <span>E</span>
                
            </a>
            
        </div>

        <div class="imgacct">
            <img src="../image/Images_garstronomie/masse.jpg" alt="acct1">
        </div>

        <div class="txt">
            <h2>" Évasion sous les Étoiles "</h2>
            <p> Plongez dans un monde de relaxation ultime avec notre activité "Évasion sous les Étoiles".
                Dans un cadre apaisant, laissez-vous envelopper par les soins spa les plus luxueux, sous un ciel étoilé artificiellement 
                créé pour une expérience unique. Vous serez transporté dans un état de détente profonde
            </p>
        </div>

        <div  class="txt">
            <h2>"Safari "</h2>

            <p> Notre safari est bien plus qu'une simple excursion, c'est une aventure sensorielle qui éveillera tous vos sens,
                du lever au coucher du soleil. Alors, qu'attendez-vous pour réserver votre place ? Rejoignez-nous pour une expérience authentique au cœur de la faune africaine
                et laissez-vous émerveiller par la magie de la nature
        </div>
        <div class="imgacct">
            <img src="../image/safari-ecotourisme-tanzanie.jpg" alt="acct1">
        </div>


        <div class="imgacct">
            <img src="../image/ZZ8.jpg" alt="acct1">
        </div>
        <div class="txt">
            <h2>"Fête Locale Envoûtante "</h2>

                <p> Joignez-vous à notre Fête Locale enchanteresse, une célébration vibrante de la culture,
                    de la musique et de la cuisine locales. Une expérience inoubliable vous attend, remplie de joie 
                    et de découvertes. Rejoignez-nous pour créer des souvenirs mémorables 
                </p>
        </div>
    </div>


    <div class="containe">
        <div class="header-title">
            <h1>Image Gallery</h1>
            <hr class="divider">
            <p>Chaque image de nos voyageurs raconte une histoire en deux dimensions.</p>
        </div>
        <!-- Gallery Starts -->
        <div class="gallery">
            <div class="image">
                <img src="../image/imgActivite/soiree3.jpg" alt="image-1">
                </a>
            </div>
            <div class="image">
                <img src="../image/ZZ9.jpg" alt="image-2">
            
            </div>
            <div class="image">
                    <img src="../image/imgActivite/soireé1.jpg" alt="image-3">
            
            </div>
            <div class="image">
                    <img src="../image/ZZ10.jpg" alt="image-4">
                
            </div>
            <div class="image">
                    <img src="../image/imgActivite/bg6.jpg" alt="image-5">
            </div>
            <div class="image">
                    <img src="../image/TT1.jpg" alt="image-6">
            </div>
        </div>
        <!-- Gallery Ends -->
    </div>
</div> 
<!--  fin 1categorie d'activite -->  

<!--  debut 2categorie d'activite -->

<div class="acct1" id="acct2">  
<div  class="debut" id="debut">
    <div class="header-title">
        <h1 id="gastronomie">Gastronomie</h1>
        <hr class="divider">
    </div>
</div>
<div class="glob">

    <div class="fixed-text">
        <a href="Acti-Maldive.php" style="color: aliceblue;"><span>G</span>
            <span>A</span>
            <span>S</span>
            <span>T</span>
            <span>R</span>
            <span>O</span>
            <span>N</span>
            <span>O</span>
            <span>M</span>
            <span>I</span>
            <span>E</span>
            
        </a>
        
    </div>

    <div class="imgacct">
        <img src="../image/Images_garstronomie/ro2.jpg" alt="acct1">
    </div>
    <div class="txt">
        <h2> " Curry de Poulet et Riz " </h2>
        <p>" Savourez un délicieux voyage gustatif avec notre Curry de Poulet et Riz, une fusion parfaite de saveurs épicées, crémeuses et aromatiques. Laissez-vous emporter par une explosion de goûts exotiques qui éveilleront vos papilles à chaque bouchée. 
            Un voyage culinaire inoubliable "</p>
    </div>
    <div  class="txt">
            <h2> "  Cabillaud Grillé "</h2>
            <p> Le "Laissez-vous séduire par notre Cabillaud Grillé, une expérience gastronomique unique qui vous 
                transporte vers un monde de saveurs marines exquises. Le poisson grillé à la perfection, rehaussé d'une touche d'évasion, éveillera vos papilles à chaque délicieuse bouchée. 
            </p>
    </div>
    <div class="imgacct">
        <img src="../image/Images_garstronomie/ECO8.jpg" alt="acct1">
    </div>


    <div class="imgacct">
        <img src="../image/Images_garstronomie/dzz.jpg" alt="acct1">
    </div>
    <div class="txt">
        <h2>" Baklava aux Noix de Cajou "</h2>
        <p> Voyagez à travers les saveurs de l'Afrique avec notre Baklava aux Noix de Cajou, un dessert qui capture l'essence sucrée du continent. Chaque couche de pâte feuilletée croustillante, 
            délicatement parfumée et généreusement garnie de noix de cajou,
            vous emmènera dans un voyage gustatif exotique </p>
    </div>


</div>

<div class="containe">
    <div class="header-title">
        <h1>Image Gallery</h1>
        <hr class="divider">
        <p>Les images de nos voyageurs sont des instantanés mémorables de leurs aventures.</p>
    </div>
    <!-- Gallery Starts -->
    <div class="gallery">
        <div class="image">
            <img src="../image/Images_garstronomie/nouri.jpg" alt="image-1">
            </a>
        </div>
        <div class="image">
            <img src="../image/Images_garstronomie/ro.jpg" alt="image-2">
        
        </div>
        <div class="image">
                <img src="../image/Images_garstronomie/ros4.jpg" alt="image-3">
        
        </div>
        <div class="image">
                <img src="../image/Images_garstronomie/papye.jpg" alt="image-4">
            
        </div>
        <div class="image">
                <img src="../image/Images_garstronomie/r.jpg" alt="image-5">
        </div>
        <div class="image">
                <img src="../image/Images_garstronomie/ro1.jpg" alt="image-6">
        </div>
    </div>
    <!-- Gallery Ends -->
</div>
</div> 
<!--  fin 2categorie d'activite -->



<!--  debut 3categorie d'activite -->
<div class="acct1" id="acct3">  
<div  class="debut" id="debut">
    <div class="header-title">
        <h1 id="hebergement">Hébergements</h1>
        <hr class="divider">
    </div>
</div>
<div class="glob">

    <div class="fixed-text">
        <a href="Acti-Maldive.php" style="color: aliceblue;"><span>H</span>
            <span>E</span>
            <span>B</span>
            <span>E</span>
            <span>R</span>
            <span>G</span>
            <span>E</span>
            <span>M</span>
            <span>E</span>
            <span>N</span>
            <span>T</span>
            
        </a>
        
    </div>

    <div class="imgacct">
        <img src="../image/pannn.jpg" alt="acct1">
    </div>
    <div class="txt">
        <h2>" la Maison Paje Beach " </h2>

        <p> Cette villa exquise à Zanzibar vous offre une véritable évasion. Ses murs blancs et son toit de chaume s'intègrent 
            harmonieusement dans le paysage tropical de Paje Beach. Dès que vous franchissez la porte, vous découvrirez un intérieur élégamment décoré, 
            imprégné de touches locales, vous invitant à la relaxation.
            
        </p>

    </div>
    <div  class="txt">
        <h2> " Élégance Intérieure "</h2>

        <p>
            Une fois à l'intérieur, l'élégance de la Villa Paje Beach à Zanzibar continue de vous éblouir. Les espaces de vie 
            spacieux sont baignés de lumière naturelle, créant une atmosphère chaleureuse et accueillante. 
            Le décor est sublimement agrémenté de touches artisanales locales.
        </p>
    </div>
    <div class="imgacct">
        <img src="../image/cham.jpg" alt="acct1">
    </div>

    <div class="imgacct">
        <img src="../image/Images_garstronomie/terrace.jpg" alt="acct1">
    </div>
    <div class="txt">
        <h2>" Terrasse Enchantée à la Villa Paje Beach " </h2>

        <p> La terrasse de la Villa Paje Beach à Zanzibar est un véritable coin de paradis en plein air. Elle s'ouvre sur une vue 
            imprenable sur les eaux cristallines
            de Paje Beach et crée une ambiance magique pour se détendre et se divertir..
        </p>

    </div>
</div>

<div class="containe">
    <div class="header-title">
        <h1>Image Gallery</h1>
        <hr class="divider">
        <p>Découvrez notre galerie, un voyage visuel captivant à travers les yeux de nos voyageurs</p>
    </div>
    <!-- Gallery Starts -->
    <div class="gallery">
        <div class="image">
            <img src="../image/Images_garstronomie/ga1.jpg" alt="image-1">
            </a>
        </div>
        <div class="image">
            <img src="../image/Images_garstronomie/ga2.jpg" alt="image-2">
        
        </div>
        <div class="image">
                <img src="../image/Images_garstronomie/ga5.jpg" alt="image-3">
        
        </div>
        <div class="image">
                <img src="../image/Images_garstronomie/chacha.jpg" alt="image-4">
            
        </div>
        <div class="image">
                <img src="../image/Images_garstronomie/chacha1.jpg" alt="image-5">
        </div>
        <div class="image">
                <img src="../image/Images_garstronomie/terra.jpg" alt="image-6">
        </div>
    </div>
    <!-- Gallery Ends -->
</div>
</div> 
<!--  fin 3categorie d'activite -->






        <!-- Footer Start -->
        <footer id="footer">
            <h1>
                <a href="HOME2.php"><img src="../image/logo.png" alt="" /></a>
            </h1>
            <p>Un voyage milles rencontre</p>
            <div class="social-links">
                <i class="fa-brands fa-twitter"></i>
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
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>

</html>