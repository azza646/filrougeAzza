<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patisserie_occidentale extends CI_Controller {
    public function index() {
        $this -> load -> view ("patisserie_occidentale.php" );
    }
}
