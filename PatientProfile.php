
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PatientProfile extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load any helpers or libraries you need
        $this->load->helper('url');
    }
    
    public function index() {
        $this->load->view('includes/admin-header');
        $this->load->view('admin/patient-profile'); // Make sure this path matches your file structure
        $this->load->view('includes/footer');
    }
}