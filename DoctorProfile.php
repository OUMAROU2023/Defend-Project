
<!-- 
defined('BASEPATH') OR exit('No direct script access allowed');

class DoctorProfile extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
         $this->load->view('includes/header');
         $this->load->view('admin/doctor-profile');
         $this->load->view('includes/footer');
    }
} -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DoctorProfile extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load any helpers or libraries you need
        $this->load->helper('url');
    }
    
    public function index() {
        $this->load->view('includes/admin-header');
        $this->load->view('admin/doctor-profile'); // Make sure this path matches your file structure
        $this->load->view('includes/footer');
    }
}