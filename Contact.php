<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
         $this->load->view('includes/header');
         $this->load->view('Contact-content');
         $this->load->view('includes/footer');
    }
}