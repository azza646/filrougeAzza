<?php

/*
class Nos_produitsModele{

    private $connexion;      
    private $host = "localhost";
    private $base = "a_fleur_patisserie";
    private $utilisateur = "root";
    private $motdepasse = " ";


    function _constrat() {
try 
	{
	   $connexion = new PDO (
        'mysql:host='. $this ->host.
        ';charset=utf8;dbname='. $this ->base, 
        $this ->utilisateur,
         $this ->motdepasse) ;

       // Ajout d'une option PDO pour gérer les exceptions
       $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} 

	catch (Exception $e) 
	{
	    echo 'Erreur : ' . $e->getMessage() . '<br />';
	    echo 'N° : ' . $e->getCode();
	    die('Fin du script');
    }

}*/



class Nos_produitsModele extends CI_Model {
    public function index() {
        $this ->load ->database();
        $requete = $this -> db ->query(" SELECT * FROM les_produits");
        $nos_produits = $requete -> result();
        return $nos_produits;
    }

public function getOne ($id){
    $this ->load ->database();
    $requete= "SELECT * FROM les_produits WHERE pro_id= ?" ;
    $resultat = $this ->db -> query($requete, array($id));
    $nos_produits = $resultat -> result() [0];
    return $nos_produits;
}
    

} 











?>