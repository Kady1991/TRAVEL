<?php
    session_start();
    $errr_l="";
    ?>
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8" />
                    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

                        <!-- Font Awesome Cdn -->
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
                                        <!-- Font Awesome Cdn -->



                    <link rel="stylesheet" href="../asset/CSS/connexion.css" />
                    <script src="../asset/JS/indexjs.js" defer></script>
                    <link rel="stylesheet" href="../asset/CSS/styleMenu.css">
                    <link rel="stylesheet" href="../asset/CSS/styleHome copy.css">
                    <link rel="stylesheet" href="../asset/CSS/style-formu.css">
                    <link rel="stylesheet" href="../asset/CSS/coment.css">

                    <!-- Bootstrap Link -->
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                        crossorigin="anonymous">
                    <!-- Bootstrap Link -->


                    

                    <!-- Google Fonts -->
                    <link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
                    <!-- Google Fonts -->
                    <title>formulaire</title>
                </head>
                <body>

                    
                    
                    <div class="containerind">
                        
                        <nav>
                            <a class="navbar-brand" href="#" id="logo"><img class="logo"  src="../image/logo.png" alt="">
                                </a>
                            <ul>
                                <li class="nav-item">
                                    <button type="button" , role="button" class="btnn" id="displayForm">Se Connecter</button>
                                </li>
                            </ul>
                        </nav>

                        <div class="accueil">
                            
                        </div>
                        <section>
                            <div class="sec-container">
                                <div class="formWrapper">
                                    <div class="cardind">
                                        <div class="card-header">
                                            <div id="forLogin" class="form-header active">Se connecter</div>
                                            <div id="forRegister" class="form-header">S'inscrire</div>
                                        </div>
                                        <div class="card-bod" id="formContainer">
                                            <!-- Formulaire d'connexion -->
                                            <form action="connexion.php" id="loginForm" method="POST">
                                                <input type="email" class="form-control" placeholder="Email:"   name="email" />
                                                <input type="password" class="form-control" placeholder="Mot de passe:"  name="password"/>
                                                <label for="remember"> 
                                                <!-- <input type="checkbox" class="form-check" id="remember" />  <span>Se Souvenir de moi</span> -->
                                            </label> 
                                                <br>
                                                <button class="formButton" name="connexion">Connexion</button>
                                            </form>
                                            <!-- Formulaire d'INSCRIPTION -->
                                            <form action="inscription.php" id="registerForm" class="toggleForm" method="POST">
                                                <input type="text" class="form-control" placeholder="Nom:" name="nom"/>
                                                <input type="text" class="form-control" placeholder="Prénom:" name="prenom"/>
                                                <input type="email" class="form-control" placeholder=" Email:"  name=" email" />
                                                <input type="password" class="form-control" placeholder=" Mot de passe:"    name="password"/>
                                                <!-- <label for="remember">
                                                    <input type="checkbox" class="form-check" id="privacy" />
                                                    J'accepte les termes de l'accord
                                                </label> -->
                                                <button class="formButton" name="inscription">Inscription</button>
                                                
                                                <p><?php echo "$errr_l" ?></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        </div>
                    </div>
                    <section class="book" id="book">
                    <div class="container">

                        <!-- <div class="main-text"> -->
                            <h1 class="titreLog" ><span class="logonoir"><img class="logonoir" src="../image/logonoir.png"  alt=""></span> en quelques mots</h1>
                        <!-- </div> -->

                        <div class="row">
                            <div class="col-md-6 py-3 py-md-0 ">
                                <div class="card">
                                    <img src="../image/beach.jpg" alt="">
                                </div>
                            </div>

                            <div class="col-md-6 py-3 py-md-0">
                                <div class="scrollable">

                                    <strong>Travelink ?</strong>
                                    <p>
                                        Agence de voyage et de rencontres spécialisée dans la création d'expériences uniques et mémorables pour nos clients. 
                                        <br> Voici une description de nos principales activités.
                                    </p>
                                    <strong>Un hébergement de qualité :</strong>
                                    <p>Votre voyage comprendra un séjour dans des hôtels confortables situés dans des quartiers
                                        stratégiques de la ville,
                                        ce qui facilite l'accès aux sites touristiques emblématiques.</p>

                                    <strong>Transport pratique :</strong>
                                    <p>Nous prenons en charge les détails logistiques, y compris les vols, les transferts depuis
                                        l'aéroport,
                                        et le transport terrestre dans la ville. Vous n'avez qu'a profiter</p>

                                    <strong>Dégustations de cuisine locale:</strong>
                                    <p>Ce voyage organisé vous permettra de déguster des plats locaux authentiques avec des
                                        menus soigneusement sélectionnés. </p>


                                    <strong> Activités culturelles :</strong>
                                    <p>Outre les visites incontournables, votre itinéraire peut également inclure des activités
                                        culturelles telles que des spectacles de cabaret,
                                        des croisières, ou des excursions.</p>

                                    <strong>Assistance 24/7 :</strong>
                                    <p>Pendant votre séjour, vous bénéficierez d'une assistance en continu en cas de besoin.Vous
                                        pouvez vous sentir en sécurité en sachant que quelqu'un
                                        est là 24/h sur 24.</p>
                                </div>
                                    <a href="reservation.php" style="margin-top: 3rem;"><button id="about-btn">Revervez ici </button></a>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section Book End -->



                <!-- Section Packages Start -->
                <section class="packages" id="packages">
                    <div class="container">
                        <div class="main-text">
                            <h1 class="TITRE1"><span>D</span>estination</h1>
                        </div>

                        <div class="row" style="margin-top: 50px;">

                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="../image/MAL.jpg" alt="">
                                    <div class="card-body">
                                        <h3>Maldives </h3>
                                        <p class="cours">" Voyage en cours"</p>
                                        <p>Plongez dans un paradis tropical aux eaux cristallines, où chaque moment devient
                                            une évasion inoubliable!</p>
                                        <div class="star ">
                                            <i class="fa-solid fa-star checked "></i>
                                            <i class="fa-solid fa-star checked"></i>
                                            <i class="fa-solid fa-star checked"></i>
                                            <i class="fa-solid fa-star checked"></i>
                                            <i class="fa-solid fa-star checked "></i>
                                        </div>
                                        <h6>Prix: <strong>€5000</strong></h6>
                                        <a class="desti-btn" href="">Découvrez ce voyage</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="../image/zan1.jpg" alt="">
                                    <div class="card-body">
                                        <h3>Zanzibar</h3>
                                        <p class="cours">" Voyage en été"</p>
                                        <p>Plongez dans l'enchantement de Zanzibar, où l'histoire rencontre la beauté
                                            naturelle!</p>
                                        <div class="star">
                                            <i class="fa-solid fa-star checked"></i>
                                            <i class="fa-solid fa-star checked"></i>
                                            <i class="fa-solid fa-star checked"></i>
                                            <i class="fa-solid fa-star "></i>
                                            <i class="fa-solid fa-star "></i>
                                        </div>
                                        <h6>Prix: <strong>€5000</strong></h6>
                                        <a href="">Découvrez ce voyage</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="../image/ecoces9.webp" alt="">
                                    <div class="card-body">
                                        <h3>Ecosse</h3>
                                        <p class="cours">" Voyage en automne"</p>
                                        <p>Explorez les paysages mystiques et la richesse culturelle de l'Écosse, une terre
                                            d'aventures sans fin</p>
                                        <div class="star">
                                            <i class="fa-solid fa-star checked"></i>
                                            <i class="fa-solid fa-star checked"></i>
                                            <i class="fa-solid fa-star checked"></i>
                                            <i class="fa-solid fa-star "></i>
                                            <i class="fa-solid fa-star "></i>
                                        </div>
                                        <h6>Prix: <strong> €5000</strong></h6>
                                        <a href="">Découvrez ce voyage</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </section>
                <!-- Section Packages End -->

                <div class="fixed-text">
                    <a href="HOME2.php" style="color: aliceblue;"><span>H</span><span>O</span><span>M</span><span>E</span></a>
                    
                </div>

                <!-- Section Services Start -->
                <section class="services" id="services">
                    <div class="container">

                        <div class="main-text">
                            <h1 ><span>S</span>ervices</h1>
                        </div>

                        <div class="row" style="margin-top: 30px;">

                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <i class="fas fa-hotel"></i>
                                    <div class="card-body">
                                        <h3>Hotels 5 étoiles</h3>
                                        <p> Élégance et confort inégalés !</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <i class="fas fa-utensils"></i>
                                    <div class="card-body">
                                        <h3>Dégustation raffinée</h3>
                                        <p>Plaisirs gastronomiques somptueux !</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <i class="fas fa-bullhorn"></i>
                                    <div class="card-body">
                                        <h3>Accompagnement sécurisé</h3>
                                        <p>Notre priorité absolue est votre sécurité !</p>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="row" style="margin-top: 30px;">

                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <i class="fas fa-globe-asia"></i>
                                    <div class="card-body">
                                        <h3>Partout dans le monde</h3>
                                        <p>Embarquez avec nous pour un voyage extraordinaire aux quatre coins du monde !</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <i class="fas fa-plane"></i>
                                    <div class="card-body">
                                        <h3>Voyage en premiere</h3>
                                        <p>Tous nos voyages vous plongent dans l'excellence, où le luxe de la première
                                            classe est la norme !</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <i class="fas fa-hiking"></i>
                                    <div class="card-body">
                                        <h3>Aventures</h3>
                                        <p>Préparez-vous à une aventure inoubliable qui marquera vos souvenirs pour toujours!</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- Section Services End -->

                <!--styles des  commentaire -->
                <section id="testimonials">


                        <div class="tesmonial-heading">
                        <!-- <span>Commentaires</span> -->
                        <div class="main-text">
                            <h1><span>C</span>ommentaires clients</h1>
                        </div>
                        </div>
                
                    <!-- box contenaire -->
                    <div class="testimonial-box-container">
                
                        <!--  CONTENU1 -->
                        <div class="testimonial-box">
                
                        <div class="box-top">
                            <div class="profile">
                            <!-- img profil -->
                            <div class="profile-img">
                                <img src="../image/imgCommet/fille.jpg" alt="">
                            </div>
                            <!-- nom utilisateur -->
                            <div class="name-user">
                                <strong>safae ben</strong>
                                <span>@bensafae</span>
                            </div>
                            </div>
                            <div class="star">
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                            </div>
                        </div>
                
                        <!-- Commentaire -->
                
                            <div class="client-comment">
                            <p>
                                "Mon voyage organisé via ce site a été une expérience exceptionnelle. 
                                Les destinations, les hébergements et l'ensemble de l'itinéraire ont dépassé toutes mes attentes. 
                                Je recommande vivement ce site."
                            </p>
                            </div>
                
                        </div>
                
                        <!--  CONTENU2 --> 
                        <div class="testimonial-box">
                
                        <div class="box-top">
                            <div class="profile">
                            <!-- img profil -->
                            <div class="profile-img">
                                <img src="../image/imgCommet/mec.jpg" alt="">
                            </div>
                            <!-- nom utilisateur -->
                            <div class="name-user">
                                <strong>Gabriel</strong>
                                <span>@kadysangare</span>
                            </div>
                            </div>
                            <div class="star">
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                            </div>
                        </div>
                
                        <!-- Commentaire -->
                
                            <div class="client-comment">
                            <p>
                                "J'ai réservé mon dernier séjour sur ce site de voyage, et je n'aurais pas pu être plus heureux. 
                                Le processus de réservation était simple, le service client était réactif, 
                                et le voyage lui-même s'est déroulé sans accroc."
                            </p>
                            </div>
                
                        </div>
                
                
                        <!--  CONTENU1 -->
                        <div class="testimonial-box">
                
                        <div class="box-top">
                            <div class="profile">
                            <!-- img profil -->
                            <div class="profile-img">
                                <img src="../image/imgCommet/fille2.jpg" alt="">
                            </div>
                            <!-- nom utilisateur -->
                            <div class="name-user">
                                <strong>safae ben</strong>
                                <span>@bensafae</span>
                            </div>
                            </div>
                            <div class="star">
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                            </div>
                        </div>
                
                        <!-- Commentaire -->
                
                            <div class="client-comment">
                            <p>
                                "Ce site de voyage a rendu mes vacances de rêve possibles.
                                J'ai pu explorer des endroits incroyables sans me soucier de l'organisation. 
                                Tout était bien pensé, de l'itinéraire aux visites guidées. Je suis comblé !"
                            </p>
                            </div>
                
                        </div>
                
                        <!--  CONTENU2 --> 
                        <div class="testimonial-box">
                
                        <div class="box-top">
                            <div class="profile">
                            <!-- img profil -->
                            <div class="profile-img">
                                <img src="../image/imgCommet/mec.jpg" alt="">
                            </div>
                            <!-- nom utilisateur -->
                            <div class="name-user">
                                <strong>Michael</strong>
                                <span>@kadysangare</span>
                            </div>
                            </div>
                            <div class="star">
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                            </div>
                        </div>
                
                        <!-- Commentaire -->
                
                            <div class="client-comment">
                            <p>
                                "En tant que voyageur fréquent, je peux affirmer que ce site se démarque vraiment.
                                Les offres spéciales et les forfaits sont imbattables,
                                et la facilité de réservation en fait mon premier choix pour chaque aventure à venir."
                            </p>
                            </div>
                
                        </div>
                
                            <!--  CONTENU3 -->
                        <div class="testimonial-box">
                
                        <div class="box-top">
                            <div class="profile">
                            <!-- img profil -->
                            <div class="profile-img">
                                <img src="../image/imgCommet/femme1.jpg" alt="">
                            </div>
                            <!-- nom utilisateur -->
                            <div class="name-user">
                                <strong>fatma web12</strong>
                                <span>@web12fatma</span>
                            </div>
                            </div>
                            <div class="star">
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                            </div>
                        </div>
                
                        <!-- Commentaire -->
                
                            <div class="client-comment">
                            <p>
                                "Je suis tombé sur ce site de voyage par hasard, et cela a été une chance incroyable. 
                                Mon dernier voyage en solo a été rendu sans tracas grâce à leur expertise. 
                                Leur passion pour les voyages brille à travers chaque détail."
                            </p>
                            </div>
                
                        </div>
                
                
                        <!--  CONTENU4 -->
                        <div class="testimonial-box">
                
                        <div class="box-top">
                            <div class="profile">
                            <!-- img profil -->
                            <div class="profile-img">
                                <img src="../image/imgCommet/fille.jpg" alt="">
                            </div>
                            <!-- nom utilisateur -->
                            <div class="name-user">
                                <strong>Chantal</strong>
                                <span>@web12chantal</span>
                            </div>
                            </div>
                            <div class="star">
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                            </div>
                        </div>
                
                        <!-- Commentaire -->
                
                            <div class="client-comment">
                            <p>
                                "Ce site de voyage m'a aidé à planifier un voyage mémorable. 
                                Les recommandations d'activités locales et les options d'hébergement étaient impeccables,
                                et j'ai même eu l'occasion de rencontrer des gens formidables"
                            </p>
                            </div>
                
                        </div>
                        
                    </div>
                    </section>
                




                <!-- Section Gallary Start -->
                <section class="gallary" id="gallary">
                            <div class="container">

                        <div class="main-text">
                            <h1><span>G</span>alerie</h1>
                        </div>
                        

                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="../image/Images_garstronomie/jolieIles.webp" alt="" height="230px">
                                </div>
                            </div>
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="../image/Images_garstronomie/G.jpg" alt="" height="230px">
                                </div>
                            </div>
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="../image/détente et bien être 1.jpg" alt="" height="230px">
                                </div>
                            </div>
                        </div>


                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="../image/ecosse3.jpg" alt="" height="230px">
                                </div>
                            </div>
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="../image/safari-ecotourisme-tanzanie.jpg" alt="" height="230px">
                                </div>
                            </div>
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="../image/acc2.jpg" alt="" height="230px">
                                </div>
                            </div>
                        </div>


                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="../image/acct.jpg" alt="" height="230px">
                                </div>
                            </div>
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="../image/soiree.jpg" alt="" height="230px">
                                </div>
                            </div>
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="../image/hoteluxe.jpg" alt="" height="230px">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section Gallary End -->


                <!-- About Start -->
                <section class="about" id="about">
                    <div class="container">

                        <div class="main-text">
                            <h1>A <span>propos</span></h1>
                        </div>

                        <div class="row" style="margin-top: 50px;">

                            <div class="col-md-6 py-3 py-md-0">
                                <div class="card"><img src="../image/3filles.jpg" alt=""></div>
                            </div>

                            <div class="col-md-6 py-3 py-md-0">

                                <h2>Qui sommes nous</h2>

                                <p>Trois jeunes étudiantes passionnées par le développement web ont décidé de créer
                                    un site web unique et innovant. Ces esprits créatifs, animées par le désir de mettre en
                                    pratique leurs compétences et de relever un défi excitant,
                                    ont formé une équipe dynamique et enthousiaste.
                                </p>

                                <p>Chacune d'elles a apporté sa propre expertise au projet. L'une est douée pour la
                                    conception graphique,
                                    donnant au site une esthétique visuelle attrayante. La deuxième est une solide
                                    expérience en programmation, assurant que le site fonctionnait de manière fluide et sans
                                    accrocs. Enfin, la troisième est une experte en expérience utilisateur,
                                    garantissant que la navigation sur le site soit intuitive et agréable pour les
                                    visiteurs.
                                </p>

                                <p>En travaillant ensemble, elles ont surmonté les défis techniques et les obstacles
                                    créatifs pour donner vie à leur vision.
                                    Le résultat final est un site web qui non seulement refléte leur passion et leur talent,
                                    mais est également une véritable utilité pour ses utilisateurs.
                                </p>

                                <button id="about-btn"> Plus...</button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- About End -->


                <section class="gallary" id="gallary">

                    <div class="container">

                        <div class="main-text" id="Contact">
                            <h1><span>F</span>ormulaire de contact</h1>
                        </div>
                        <p class="paraContact">
                            Vous pouvez nous contacter facilement en envoyant votre message via ce formulaire.
                            De plus, notre service client est disponible par téléphone pendant les heures de bureau..
                        </p>


                            <div class="containe">

                                <div class="contact-image">
                                    <img class="imgContact" src="../image/contacter.jpg" alt="Image de contact">
                                </div>
                        
                                <div class="contact-form">
                                                <div class="main-text"><h1><span>N</span>ous contacter</h1></div>
                                    <form action="#" method="POST">
                        
                                        <label for="nom">Nom :</label>
                                        <input type="text" id="nom" name="nom" required>
                                            
                                        <label for="email">Email :</label>
                                        <input type="email" id="email" name="email" required>

                                        <label for="message">Message :</label>    
                                        <textarea id="message" name="message" rows="4" required></textarea>
                                                
                                            <!-- <input id="#btn-connexion" type="submit" value="Envoyer">  -->
                                            <button id="about-btn" type="submit" class="about-btn"> Envoyer</button>
                                    </form>
                                </div>
                            
                            </div>
                    
                </section>
                <!-- About End -->


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