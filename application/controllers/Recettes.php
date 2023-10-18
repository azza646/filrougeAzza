<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recettes extends CI_Controller {
    public function index() {
        $this -> load -> view ("recettes.php" );
    }
}
