<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nos_produits extends CI_Controller {
    public function index() {
        
        $this -> load -> model ("Nos_produitsModele" );

        $nos_produits = $this -> Nos_produitsModele ->index() ;

        $variables ["nos_produits"] = $nos_produits;

        $this -> load -> view('nos_produits', $variables);
    }
}
