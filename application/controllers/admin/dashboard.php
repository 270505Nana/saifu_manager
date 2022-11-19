<?php
class Dashboard extends CI_Controller{

    public function index(){

        // $mobil_nana      = $this->db->query("SELECT * FROM mobil");
        // $costumer_nana   = $this->db->query("SELECT * FROM costumer");
        // $transaksi_nana  = $this->db->query("SELECT * FROM transaksi");

        // $data['mobil']      = $mobil_nana->num_rows();
        // $data['costumer']   = $costumer_nana->num_rows();
        // $data['transaksi']  = $transaksi_nana->num_rows();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('templates_admin/footer');
    }
}
?>