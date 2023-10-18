<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link   href=" <?php echo base_url ("assets/css/styleProduits.css")?>  " rel="stylesheet" />
     <!--permet l affichage du css du fichier styleAcceuil.css-->

    <link href="https://fonts.cdnfonts.com/css/handwriting" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/corgy-puppy-2" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title> Nos produits </title>
</head>


<body>

<?php
var_dump($nos_produits);
?>

<?php
foreach ($nos_produits as $nos_produit){
?>

<a href = <?php echo site_url("/produits" . $nos_produit -> pro_id ) ?>   >
<h4> <?php echo $nos_produit->pro_nom; ?>  </h4>

<?php
}
?>


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



  
  <div class="title">
    <h1 class="produits">----Nos produits----</h1> </div>   

    <section id="images">

      <div  id="images">

        <div class="parti-1">

               <div class="img img-1">
            <!--       <img src="./images/ganache_montee.png" alt="ganache" id="ganache_montee">    -->

                   <img src=" <?php echo base_url ("assets/image_produits/ganache_montee.png")?> "alt="ganache_montee" id="ganache_montee" /> 
                   <button type="button" onclick="toggle_text('text');" id="button"> Ganache >> </button>
                           <div class="text" id="text">
                          <h3>
                           NGRÉDIENTS
                           </h3>
                           <p>
                           150g Crème liquide entière<br>
                           150 g Chocolat blanc pâtissier<br>
                           6g Arôme vanille
                          </p>
                          </div>
               </div>

               <div class= "img img-2">
                <!--         <img src="./images/base.jpg" alt="base" id="base">  -->

                        <img src=" <?php echo base_url ("assets/image_produits/base.jpg")?> "alt="base" id="base" /> 
                         <button type="button" onclick="toggle_text('text');"id="button"> Pate sucrée >> </button>
                         <div class="text" id="text">
                            <h3>
                             NGRÉDIENTS
                             </h3>
                             <p>
                             150g farine<br>
                             150 g sucre<br>
                             4 oeufs
                           </p>
                           </div>
                </div>

        </div>
    
              <div class="img img-3">
          <!--         <img src="./images/pate-a-tartiner.jpg" alt="pate" id="pate">   -->

                   <img src=" <?php echo base_url ("assets/image_produits/pate-a-tartiner.jpg")?> "alt="pate" id="pate" /> 
                   <button type="button" onclick="toggle_text('text');" id="button">Pate à tartiner >> </button>
                   <div class="text" id="text">
                    <h3>
                     NGRÉDIENTS
                     </h3>
                     <p>
                     400 chocolat<br>
                     200 sucre glace<br>
                     250 g noisettes
                   </p>
              </div>
     </div> 

    </div>

      <div class="img img-4">
        <!--      <img src="./images/creme.png" alt="creme" id="creme">   -->

              <img src=" <?php echo base_url ("assets/image_produits/creme.png")?> "alt="creme" id="creme" /> 
              <button type="button" onclick="toggle_text('text');" id="button"> Creme patissiere >> </button>
               
               <div class="text" id="text">
                <h3>
                 NGRÉDIENTS
                 </h3>
                 <p>
                 180 ml lait<br>
                 300g sucrer<br>
                 100 g maizena
               </p>
          </div>

      </div>
    </section>
</body>  

<footer>
    <p>Lexique Mentions légales de Politique de confidentialité Copyright <br/><i>2023 A Fleur Patisserie </i> </p>
    
    <div class="social">
    <i class="fa-brands fa-square-facebook"></i>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-youtube"></i>
    </div>
    
</footer>

</html>

<script type="text/javascript">
  function toggle_text(id) {
    var span = document.getElementById(id);

    if(span.style.display == "none") {
      span.style.display = "inline";
    } else {
      span.style.display = "none";
    }
  }
  
</script> <br>

</body>
</html>