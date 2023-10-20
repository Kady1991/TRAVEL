<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../asset/CSS/reservation.css">
        <title>reservation</title>
    </head>
    <body>
        <section class="content">
        <div class="global">
            <div class="img">      
            </div>
            <div class=" perso">
                <h1> Formulaire de reservation</h1>
                <form action="code-reservation.php" method="Post"  class="formR">
                    <div class="box"> 
                    <div class="col">

                        <select name="destination" id="destination" required>
                            <option   name="destination"    value="destination">Destination</option>
                            <option      name="destination"   value="Maldives" >Maldives</option>
                            <option      name="destination"   value="Zanzibar" >Zanzibar</option>
                            <option     name="destination"     value="Ecosse" >Ecosse</option>
                        </select>
                        </div>
                        <div class="col">
                        <select name="genre" id="genre">
                            <option name="genre"  value="Genre">Genre</option>
                            <option  name="genre" value="femme">Femme</option>
                            <option name="genre"  value="homme">Homme</option>
                            </select>
                                <!-- <input type="hidden" name="totalParticipants" value="<?php echo $totalParticipants; ?>">
                                <input type="hidden" name="totalHommes" value="<?php echo $totalHommes; ?>">
                                <input type="hidden" name="totalFemmes" value="<?php echo $totalFemmes; ?>">  -->
                    </div>
                    <div class="col"> <input type="text" placeholder="Nom" name="nom"/></div>
                    <div class="col"><input type="text" placeholder="Prénom" name="prénom"/></div>
                    <div class="col"><input type="date" placeholder="Date de naissance " name="date_naissance"/>
                     </div>
                     <div class="col"><input type="email" placeholder=" Adresse mail" name="email"/></div>

                        <div class="col">  <input type="tel" placeholder=" Tel" name="tel"/></div>
                        <div class="col"><input type="text" placeholder="Adresse postal" name="adresse_postal"/></div>
                        </div>
                        <div class="MOD">
                            <p>Mode de paiement :</p>
                            <div >  Visa <input type="radio" id="visa" name="paiement" value="visa"></div>
                            <div>  PayPal <input type="radio" id="PayPal" name=" paiement" value="paypall">  </div>  
                        </div>
                    <div class="butt"> <button name="soumettre">Soumettre</button></div>
                </form>
            </div>
        </div>
    </section>
    <!-- <script>
            document.addEventListener("DOMContentLoaded", function() {
                const destinationSelect = document.getElementById("destination");
                const destinationImage = document.getElementById("destination-image");

                destinationSelect.addEventListener("change", function() {
                    const selectedOption = destinationSelect.options[destinationSelect.selectedIndex];
                    const imagePath = selectedOption.getAttribute("data-image");
                    destinationImage.src = imagePath;
                });
            });
            </script> -->


    </body>
    </html>