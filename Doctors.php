

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctors extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
         $this->load->view('includes/header');
         $this->load->view('all-doctors-content');
         $this->load->view('includes/footer');
    }
}



/*
| .
| <<?php -->
|class Doctors extends Ci_Controller{
|  public function __construct()
| {
|        parent::__construct();
|   }
|    public function index(){
|        $this->load->view('all-doctors-content');
|   }
|
|} 
|
|?>
*/