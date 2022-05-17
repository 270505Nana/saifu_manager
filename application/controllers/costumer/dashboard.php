<?php
class Dashboard extends CI_Controller{

    public function index(){
        
        $this->load->view('templates_costumer/header');
        $this->load->view('costumer/dashboard');
        $this->load->view('templates_costumer/footer');
    }
}
?>