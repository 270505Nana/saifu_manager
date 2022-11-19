<?php
class Pemasukan extends CI_Controller{

    public function index(){
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tambah_pemasukan');
        $this->load->view('templates_admin/footer');
    }
    
    public function rekap_pemasukan(){
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/rekap_pemasukan');
        $this->load->view('templates_admin/footer');
    }

    public function cetak_pemasukan(){
        
        $this->load->view('templates_admin/header');
        $this->load->view('admin/cetak_pemasukan');
    }
}
?>