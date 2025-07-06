<?php
class Home extends Ci_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this->load->view('includes/header');
        $this->load->view('home');
        $this->load->view('includes/footer');
    }
}

?>