<?php


$host = "localhost";
$base = "a_fleur_patisserie";
$utilisateur = "root";
$motdepasse = " ";



// on va s'assurer que la connxion fonctionn (on fait le try catch)


try 
	{
	   $connexion = new PDO(
        'mysql:host='.$host.
        ';charset=utf8;dbname='.$base, 
        $utilisateur,
         $motdepasse);

       // Ajout d'une option PDO pour gérer les exceptions
       $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} 

	catch (Exception $e) 
	{
	    echo 'Erreur : ' . $e->getMessage() . '<br />';
	    echo 'N° : ' . $e->getCode();
	    die('Fin du script');
    }


// on a mit en place la connexion 


echo "connexion reussite "
?>