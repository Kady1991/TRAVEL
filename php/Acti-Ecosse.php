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
    <link rel="stylesheet" href="../asset/CSS/Acti-Ecosse.css">
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
                            <div class="card "  id="card1"><img    id="img1" src="../image/corde.jpg"></div>
                            <div class="card"  id="card2"><img   id="img2"  src="../image/ecoFOOD.jpg"></div>
                            <div class="card" id="card3"><img    id="img3"  src="../image/eberg3.jpg"></div>
                        </div >
                    </div>
                </section>
            </div>
    </header>
<!--  debut 1categorie d'activite -->
 <div class="acct1" id="acct1">  
    <div  class="debut" id="debut">
        <div class="header-title">
            <h1 id="Activite">Activité en Ecosse</h1>
            <hr class="divider">
        </div>
    <p>profitez de la mer a votre rythme!</p>
    </div>
    <div class="glob">

        <div class="imgacct">
            <img src="../image/festoco.jpg" alt="acct1">
        </div>

        <div class="txt">
            <h4>" Highland Games "</h4>
            <p> Les Highland Games sont des événements traditionnels écossais qui mêlent compétition sportive, musique et culture. Ils comprennent des épreuves de force comme le lancer de tronc,
                le lancer de marteau et la course de sac, ainsi que des démonstrations de danse écossaise
            </p>
        </div>

        <div  class="txt">
            <h4>" Ceilidh Dancing"</h4>

            <p> Le ceilidh est une forme de danse traditionnelle écossaise qui se pratique en groupe. Les participants suivent des pas simples guidés par un appelant (caller) 
                tandis qu'un groupe de musique traditionnelle écossaise joue des airs entraînants
            </p>
        </div>
        <div class="imgacct">
            <img src="../image/festo.webp" alt="acct1">
        </div>


        <div class="imgacct">
            <img src="../image/rand.webp" alt="acct1">
        </div>
        <div class="txt">
            <h4>" randonnée des Trois Lacs dans les Trossachs"</h4>

                <p> Cette randonnée pittoresque vous emmènera à travers les paysages enchanteurs du parc national des Trossachs en Écosse. Vous commencerez votre aventure à Loch Katrine, 
                    l'un des lacs les plus emblématiques de la région
                </p>
        </div>
    </div>


    

    <div class="containe">
        <div class="header-title">
            <h1>Image Gallery</h1>
            <hr class="divider">
            <p>Les voyageurs ont capturé leur joie à travers des photos, témoignant de la beauté de l'Écosse qui les a enchantés.</p>
        </div>
        <!-- Gallery Starts -->
        <div class="gallery">
            <div class="image">
                <img src="../image/ecoCHA.jpg" alt="image-1">
                </a>
            </div>
            <div class="image">
                <img src="../image/ecoACT.jpg" alt="image-2">
            
            </div>
            <div class="image">
                    <img src="../image/outlander.jpg" alt="image-3">
            
            </div>
            <div class="image">
                    <img src="../image/corde.jpg" alt="image-4">
                
            </div>
            <div class="image">
                    <img src="../image/randonne.jpg" alt="image-5">
            </div>
            <div class="image">
                    <img src="../image/rand.webp" alt="image-6">
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

    <div class="imgacct">
        <img src="../image/Images_garstronomie/plat.jpg" alt="acct1">
    </div>
    <div class="txt">
        <h2> " Loup de mer en croûte " </h2>
        <p>" Préparé avec le plus grand raffinement, notre "Loup de mer en croûte de sel" est une expérience gastronomique 
            luxueuse qui ravit les amateurs de poisson. Un filet de loup de mer frais, délicatement assaisonné,
            est enveloppé dans une croûte de sel artisanale, créant une coquille qui emprisonne les saveurs et les arômes "</p>
    </div>
    <div  class="txt">
            <h2> " Filet Mignon Rossini "</h2>
            <p>Le "Filet Mignon Rossini" incarne l'apogée de la gastronomie de luxe. Un filet mignon de bœuf tendre et juteux est grillé à la perfection,
            puis couronné d'une tranche de foie gras poêlé. Le tout repose sur un lit de pain grillé,
            arrosé d'une sauce au vin rouge réduite, pour créer un équilibre harmonieux .</p>
    </div>
    <div class="imgacct">
        <img src="../image/Images_garstronomie/ECO4.jpg" alt="acct1">
    </div>


    <div class="imgacct">
        <img src="../image/Images_garstronomie/desrt1.jpg" alt="acct1">
    </div>
    <div class="txt">
        <h2>" Fondant au Chocolat "</h2>
        <p>Notre "Fondant au Chocolat Grand Cru" est une expérience chocolatée inégalée, mettant en avant le meilleur du cacao.
            Ce dessert divinement riche présente une texture moelleuse à l'extérieur, tandis que l'intérieur cache un cœur liquide de chocolat noir d'exception,
            créant un contraste de saveurs et de textures envoûtant. </p>
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
            <img src="../image/Images_garstronomie/GG5.jpg" alt="image-1">
            </a>
        </div>
        <div class="image">
            <img src="../image/Images_garstronomie/CH2.webp" alt="image-2">
        
        </div>
        <div class="image">
                <img src="../image/RETT.webp" alt="image-3">
        
        </div>
        <div class="image">
                <img src="../image/RESTOTOO.png" alt="image-4">
            
        </div>
        <div class="image">
                <img src="../image/Images_garstronomie/G.jpg" alt="image-5">
        </div>
        <div class="image">
                <img src="../image/Images_garstronomie/CHEF.jpg" alt="image-6">
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

    <div class="imgacct">
        <img src="../image/MicrosoftTeams-image (15).png" alt="acct1">
    </div>
    <div class="txt">
        <h2>" Retraite sur l'Atoll " </h2>

        <p> Notre logement "Retraite sur l'Atoll" aux Maldives est une oasis de luxe nichée sur les rives d'un atoll paradisiaque.
            Offrant des vues imprenables sur les eaux cristallines de l'océan Indien, cette retraite incarne le raffinement tropical.
            
        </p>

    </div>
    <div  class="txt">
        <h2> " Raffinement Tropical "</h2>

        <p>Notre logement "Raffinement Tropical à l'Intérieur" aux Maldives est une fusion de luxe et de nature, capturée à l'intérieur.
            Les espaces intérieurs sont conçus avec une élégance décontractée, reflétant l'environnement tropical et les traditions locales
        </p>
    </div>
    <div class="imgacct">
        <img src="../image/chambre.jpg" alt="acct1">
    </div>

    <div class="imgacct">
        <img src="../image/chambre2.jpg" alt="acct1">
    </div>
    <div class="txt">
        <h2>" Suite sur Pilotis " </h2>

        <p> Notre "Suite sur Pilotis, Océan à Perte de Vue" est un joyau d'élégance et de confort, perché au-dessus des eaux cristallines des Maldives.
            La chambre offre une atmosphère sereine, baignée de lumière naturelle qui danse à travers les fenêtres donnant sur l'océan infini.
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
            <img src="../image/imgActivite/bienetre10.jpg" alt="image-1">
            </a>
        </div>
        <div class="image">
            <img src="../image/bain.jpg" alt="image-2">
        
        </div>
        <div class="image">
                <img src="../image/imgActivite/maldi1.jpg" alt="image-3">
        
        </div>
        <div class="image">
                <img src="../image/cham.jpg" alt="image-4">
            
        </div>
        <div class="image">
                <img src="../image/cham2.jpg" alt="image-5">
        </div>
        <div class="image">
                <img src="../image/cham3.webp" alt="image-6">
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