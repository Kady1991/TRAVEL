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
    <link rel="stylesheet" href="../asset/CSS/Modif-Fatma.css">
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
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
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
                    
                        <h2>venez jeter l' ancre  avec nous!</h2>
                        <h4>Voyagez en Sécurité</h4>
                        <a href="#" class="btn-reservation home-btn">Réserver Maintenant</a>
                        <div class="find_trip">
                            <div class="card "  id="card1"><img    id="img1" src="../image/imgActivite/SPORT9.jpg"></div>
                            <div class="card"  id="card2"><img   id="img2"  src="../image/imgActivite/beinetre1.jpg"></div>
                            <div class="card" id="card3"><img    id="img3"  src="../image/imgActivite/soiree.jpg"></div>
                        </div >
                    </div>
                </section>
            </div>
    </header>
<!--  debut 1categorie d'activite -->
 <div class="acct1" id="acct1">  
    <div  class="debut" id="debut">
        <div class="header-title">
            <h1>kayak</h1>
            <hr class="divider">
        </div>
    <p>profitez de la mer a votre rythme!</p>
    </div>
    <div class="glob">

        <div class="imgacct">
            <img src="../image/imgActivite/tour1.jpeg" alt="acct1">
        </div>
        <div class="txt">
            <h2>louer un hydravion pour un tour des illes </h2>
            <p>Lorem ipsum dolor sit amet.
            Earum quia nostrum quaerat optio!
         Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga!
         Natus est, vitae hic et illum consectetur a culpa? Lorem, ipsum 
         dolor sit amet consectetur adipisicing elit. Reprehenderit.</p>
        </div>
        <div  class="txt">
            <h2> kayak.</h2>
            <p>Lorem ipsum dolor sit amet.lorem9
            Earum quia nostrum quaerat optio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil?
            Nihil aliquam ullam rerum, culpa ipsam illo sed magni.</p>
        </div>
        <div class="imgacct">
            <img src="../image/imgActivite/kayakpex.jpg" alt="acct1">
        </div>
  </div>

    <div class="containe">
        <div class="header-title">
            <h1>Image Gallery</h1>
            <hr class="divider">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto.</p>
        </div>
        <!-- Gallery Starts -->
        <div class="gallery">
            <div class="image">
                <img src="../image/imgActivite/gal1.jpg" alt="image-1">
                </a>
            </div>
            <div class="image">
                <img src="../image/imgActivite/groupe.jpeg" alt="image-2">
            
            </div>
            <div class="image">
                    <img src="../image/imgActivite/gal3.jpeg" alt="image-3">
            
            </div>
            <div class="image">
                    <img src="../image/imgActivite/personne.jpg" alt="image-4">
                
            </div>
            <div class="image">
                    <img src="../image/imgActivite/gal2.jpg" alt="image-5">
            </div>
            <div class="image">
                    <img src="../image/imgActivite/groupe2.jpg" alt="image-6">
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
        <h1>bien-être</h1>
        <hr class="divider">
    </div>
</div>
<div class="glob">

    <div class="imgacct">
        <img src="../image/imgActivite/bn2.jpg " alt="acct1">
    </div>
    <div class="txt">
        <h2>louer un hydravion pour un tour des illes </h2>
        <p>Lorem ipsum dolor sit amet.
        Earum quia nostrum quaerat optio!
     Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga!
     Natus est, vitae hic et illum consectetur a culpa?</p>
    </div>
    <div  class="txt">
        <h2> kayak.</h2>
        <p>Lorem ipsum dolor sit amet.
        Earum quia nostrum quaerat optio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil?
        Nihil aliquam ullam rerum, culpa ipsam illo sed magni.</p>
    </div>
    <div class="imgacct">
        <img src="../image/imgActivite/bienetre3 (3).jpg" alt="acct1">
    </div>
</div>

<div class="container">
    <div class="header-title">
        <h1>Image Gallery</h1>
        <hr class="divider">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto.</p>
    </div>
    <!-- Gallery Starts -->
    <div class="gallery">
        <div class="image">
            <img src="../image/imgActivite/beinetre4.jpg" alt="image-1">
            </a>
        </div>
        <div class="image">
            <img src="../image/imgActivite/bienetre10.jpg" alt="image-2">
        
        </div>
        <div class="image">
                <img src="../image/imgActivite/bn2.jpg" alt="image-3">
        
        </div>
        <div class="image">
                <img src="../image/imgActivite/groupe15.jpg" alt="image-4">
            
        </div>
        <div class="image">
                <img src="../image/imgActivite/maldi8.jpg" alt="image-5">
        </div>
        <div class="image">
                <img src="../image/imgActivite/groupe14.jpg" alt="image-6">
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
        <h1>soireé&&monument</h1>
        <hr class="divider">
    </div>
</div>
<div class="glob">

    <div class="imgacct">
        <img src="../image/imgActivite/bg6.jpg" alt="acct1">
    </div>
    <div class="txt">
        <h2>louer un hydravion pour un tour des illes </h2>
        <p>Lorem ipsum dolor sit amet.
        Earum quia nostrum quaerat optio!
     Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga!
     Natus est, vitae hic et illum consectetur a culpa?</p>
    </div>
    <div  class="txt">
        <h2> kayak.</h2>
        <p>Lorem ipsum dolor sit amet.
        Earum quia nostrum quaerat optio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil?
        Nihil aliquam ullam rerum, culpa ipsam illo sed magni.</p>
    </div>
    <div class="imgacct">
        <img src="../image/imgActivite/monument-mal.jpg" alt="acct1">
    </div>
</div>

<div class="container">
    <div class="header-title">
        <h1>Image Gallery</h1>
        <hr class="divider">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto.</p>
    </div>
    <!-- Gallery Starts -->
    <div class="gallery">
        <div class="image">
            <img src="../image/imgActivite/soiree7.jpg" alt="image-1">
            </a>
        </div>
        <div class="image">
            <img src="../image/imgActivite/soiree3.jpg" alt="image-2">
        
        </div>
        <div class="image">
                <img src="../image/imgActivite/monum3.jpg" alt="image-3">
        
        </div>
        <div class="image">
                <img src="../image/imgActivite/soireé2.jpg" alt="image-4">
            
        </div>
        <div class="image">
                <img src="../image/imgActivite/soiree.jpg" alt="image-5">
        </div>
        <div class="image">
                <img src="../image/imgActivite/monument1.jpg" alt="image-6">
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