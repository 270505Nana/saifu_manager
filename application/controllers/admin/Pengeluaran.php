<?php
class Pengeluaran extends CI_Controller{

    public function index(){
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tambah_pengeluaran');
        $this->load->view('templates_admin/footer');
    }
    
    public function rekap_pengeluaran(){
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/rekap_pengeluaran');
        $this->load->view('templates_admin/footer');
    }
    
    public function cetak_pengeluaran(){
        
        $this->load->view('templates_admin/header');
        $this->load->view('admin/cetak_pengeluaran');
    }
}
?>