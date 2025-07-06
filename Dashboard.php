<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load any helpers or libraries you need
        $this->load->helper('url');
    }
    
    public function index() {
        // $this->load->view('includes/header');
        $this->load->view('admin/dashboard'); // Make sure this path matches your file structure
        $this->load->view('includes/footer');
    }
}