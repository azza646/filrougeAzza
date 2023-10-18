<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link   href=" <?php echo base_url ("assets/css/styleAcceuil.css")?>  " rel="stylesheet" />
     <!--permet l affichage du css du fichier styleAcceuil.css-->

    <link href="https://fonts.cdnfonts.com/css/handwriting" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/corgy-puppy-2" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Acceuil</title>
</head>


<body>







<header>
<h1>    A Fleur patisserie       </h1>
    <nav>
        <ul>
            <li id="a_propos"><a href ="#">A propos</a></li>
            <li id="recettes"><a href ="#">Recettes</a></li>
            <li id="nos_produis"><a href ="#">Nos produits</a></li>
            <li id="contact"><a href ="#">Contact</a></li>
        </ul>
    </nav>
</header>
   

    <form class="rechercher" method="GET" action="">
        <input id= "input " type="text" placeholder="Search"   class="search"   >
        <i class="fa-solid fa-magnifying-glass"></i>
        <button id="button"  type="submit"> Rechercher des recetttes </button>
    </form>


    
<div class="titre">
    <h2 class="produits">----Votre blog plaisir ----</h2> 
</div>   
   

<section id="section-1">
<div class="bloc-tout">
      <div  class="partie-1">
            <div class=" img img-1">
              <!--  <img src="./images/cuillere.jpg" alt="toque" id="img-1">   -->
                <img src=" <?php echo base_url ("assets/image_acceuil/cuillere.jpg")?> "alt="cuillere" id="img-1" /> 
                 <!--permet l affichage du css de l'image -->   
            </div>


          <div class=" img img-2">
            <p id="texte">
                "Que ce soit pour ces pâtes aux<br> fruits signature, entremets, <br>
                tiramissu ou samsa, A fleur<br> patisserie porte une attention <br>
                particulière aux choix des<br> produits qui composent ses<br> petits douceurs"
               </p>
            </div>

        </div>
            <div class="partie-2">
                <div class="img img-3">
            <!--        <img src="./images/samsa1.jpg" alt="toque" id="img-3">   -->
                    <img src=" <?php echo base_url ("assets/image_acceuil/samsa1.jpg")?> "alt="samsa1"  id="img-3"/>  
            </div> 
            <div class="img img-4">
            <!--    <img src="./images/fleur.jpg.webp" alt="toque" id="img-4">  -->
                <img src=" <?php echo base_url ("assets/image_acceuil/fleur.jpg.webp")?> "alt="fleur" id="img-4"/> 
            </div>
    </div>
    <div class="partie-3">
        <div class="img img-5">
<!--    <img src="./images/soleil.jpg" alt="toque" id="img-5">     -->
    <img src=" <?php echo base_url ("assets/image_acceuil/soleil.jpg")?> "alt="soleil" id="img-5" />  
</div>
</div>
</div>

</section>  
    

    <h2 id="h2" class="produits">----A DECOUVRIR SUR LE BLOG ----</h2> 

       <section id="section-2" class="section-2">
           <div class="images-tout">
            <div class="image image-1">
        <!--    <img src="./images/tarte_pommes.jpg" id="tarte_pommes"/>  -->
            <img src=" <?php echo base_url ("assets/image_acceuil/tarte_pommes.jpg")?> "alt="tarte_pommes" id="tarte_pommes"/> 
            
            <div class="text">
                <p class="text-para">tarte et tartelette</p>
                
            </div>
            </div>  
            <div class="image image-2">
            <!--    <img src="./images/cheesecake_choco.png "alt="cheesecake_choco" id="cheesecake_choco"/> -->
                <img src=" <?php echo base_url ("assets/image_acceuil/cheesecake_choco.png")?> "alt="cheesecake_choco" id="cheesecake_choco"/>
                
                <div class="text">
                    <p class="text-para">tarte et tartelette</p>
                     
                 </div>
            </div> 
            <div class="image image-3">
        <!--    <img src="./images/kaak_warka.jpg "alt="kaak_warka" id="kaak_warka"/>   -->
            <img src=" <?php echo base_url ("assets/image_acceuil/kaak_warka.jpg")?> "alt="kaak_warka" id="kaak_warka"/> 
            <div class="text">
                <p class="text-para">tarte et tartelette</p>
                 
             </div>
            </div> 
            <div class="image image-4">
        <!--    <img src="./images/tiramissu_verre.png" id="tiramissu_verre" />    -->
            <img src=" <?php echo base_url ("assets/image_acceuil/tiramissu_verre.png")?> "alt="tiramissu_verre" id="tiramissu_verre" /> 
            <div class="text">
                <p class="text-para">tarte et tartelette</p>
                 
             </div>
            </div>
            <div class="image image5">
        <!--    <img src="./images/capcake_fraise.png" alt="capcake_fraise" id="capcake_fraise"/>    -->
            <img src=" <?php echo base_url ("assets/image_acceuil/capcake_fraise.png")?> "alt="capcake_fraise" id="capcake_fraise"/>  
            <div class="text">
                <p class="text-para">tarte et tartelette</p>
                 
             </div>
            </div> 
            <div class="image image6">
        <!--    <img src="./images/samsa_couleur.jpg" alt="samsa_couleur"  id="samsa_couleur" />    -->
            <img src=" <?php echo base_url ("assets/image_acceuil/samsa_couleur.jpg")?> "alt="samsa_couleur"  id="samsa_couleur" />
            <div class="text">
                <p class="text-para">tarte et tartelette</p>
                 
             </div>
            </div> 
            <div class="image image7">
        <!--    <img src="./images/entremet_chocolat.png"alt="entremet_chocolat"  id="entremet_chocolat"  />    -->
            <img src=" <?php echo base_url ("assets/image_acceuil/entremet_chocolat.png")?> "alt="entremet_chocolat"  id="entremet_chocolat"  /> 
            <div class="text">
                <p class="text-para">tarte et tartelette</p>
                 
             </div> 
            </div> 
            <div class="image image8">
        <!--    <img src="./images/gateau.png "alt="gateau"  id="gateau" />  -->
            <img src=" <?php echo base_url ("assets/image_acceuil/gateau.png")?> "alt="gateau"  id="gateau" />  
            <div class="text">
                <p class="text-para">tarte et tartelette</p>
                 
             </div> 
            </div> 
        </div>
    </div>
</section>
<section class="section-3">
<div id= "main">
    <!--     <img src="./images/mains.jpg"alt="mains"   id="mains" />  -->
         <img src=" <?php echo base_url ("assets/image_acceuil/mains.jpg")?> "alt="mains"   id="mains" /> 
</div> 
</section>   
<footer>
    <nav class="footer-nav">
        <div class="partie-nav">
            <h5 class="h5-footer">Navigation</h5>
            <li id="a_propos-footer"><a href ="#">A propos</a></li>
            <li id="recettes-footer"><a href ="#">Recettes</a></li>
            <li id="nos_produis-footer"><a href ="#">Nos produits</a></li>
            <li id="contact-footer"><a href ="#">Contact</a></li>
        </div>
    </nav>
    <div class="inscrit">
        <h3 class="h3-footer">
            S'inscrire
        </h3>
        <p class="p-footer">
            A la de la fleur patisserie
        </p>
        <form class="rechercher" method="GET" action="">
            <input id= "input " type="text" placeholder="Search"   class="search">
            <button id="button"  type="submit"> Rechercher des recetttes </button>
        </form>

    </div>
<p>Lexique Mentions légales de Politique de confidentialité Copyright <br/><i>2023 A Fleur Patisserie </i> </p>

<div class="social">
    <i class="fa-brands fa-square-facebook"></i>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-youtube"></i>
   
</div>

</footer>
</body>
  
</html>