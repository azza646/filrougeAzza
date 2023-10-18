<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patisserie_orientale extends CI_Controller {
    public function index() {
        $this -> load -> view ("patisserie_orientale.php" );
    }
}
