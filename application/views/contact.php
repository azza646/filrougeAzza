<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="./css/styleContact.css" />


    
    <link rel="stylesheet"  href="./images" />

    
    <link href="https://fonts.cdnfonts.com/css/handwriting" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/corgy-puppy-2" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Contact</title>
</head>


<body>
<header>
     <nav>
        <ul>
            <li id="a_propos"><a href ="#">A propos</a></li>
            <li id="recettes"><a href ="#">Recettes</a></li>
            <li id="nos_produis"><a href ="#">Nos produits</a></li>
            <li id="contact"><a href ="#">Contact</a></li>
        </ul>
    </nav>
</header>


    <section id="bienvenue">
        <h1 class="bienvenue"> Bienvenue   </h1>
          <p id="laisser_un_commentaire">Laisser un commentaire :</p>  
        <!---</h1-->
    </section>

<section id="formulaire">
    <form action="" method="get">
        <div class="block">
             <div class="img">
                 <img src="./images/toque.png" alt="toque" id="toque">
             </div>
               <input type="text" name="commentaire" id="commentaire" placeholder="Votre commentaire">
           </div>
  </form>
</section>

<section class="sous-form" >
    
    <form action="" method="get">
            <input type="text" name="nom" id="nom"  placeholder="Nom">

            <input type="mail" name="email" id="email" placeholder="Email*">

            <input type="text" name="site" id="site" placeholder="Site">

           
                <div class="chek">
                  <input type="checkbox" id="subscribeNews" name="subscribe" value="newsletter">
                  <label for="subscribeNews">Se souvenir de mon nom , mon e-mail,et mon site web pour mon prochain commentaire .</label>
                </div>
                
                <div class="button">
                  <button type="submit" id="boutton"> Envoyer</button>
                </div>
            
       </form>
        </section>

<section class="contactez-nous">

    <div class="partie-1">
    <h2 id="nous_contacter">       Nous <br/> contacter  </h2>  
    <i class="fa-solid fa-location-dot"></i>   <!---  icone maps   -->
     </div>

     <div class="partie-2">
    <img src="./images/maps.jpg" alt="position" id="position">
       </div>
   
</section>

<section class="coordonnee">
    <div class="add-cor"> <!---- voir + console ---> <p id="adresse"> 45 rue du professeur Rollet <br>Lagnieu</p></div>
    <div class="tel-cor"><p id="num">079800878</p></div>
    <div class="@-cor">   <p id="azza">azzaattia90@gmail.com</p></div>
</section>

<footer>
<p>Lexique Mentions légales de Politique de confidentialité Copyright <br/><i>2023 A Fleur Patisserie </i> </p>

<div class="social">
    <i class="fa-brands fa-square-facebook"></i>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-youtube"></i>
   
</div>

</footer>
</body>
  
</html>