<?php
class data_laporan extends CI_Controller{

    public function index(){


        $dari   = $this->input->post('dari');
        $sampai = $this->input->post('sampai');
        

        $this->_rules();
        if($this->form_validation->run() == FALSE){

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_laporan');
        $this->load->view('templates_admin/footer');
        }else{
            // query untuk menampilkan data di tampilkan laporan
            $data['laporan'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, costumer cs 
            WHERE tr.id_mobil = mb.id_mobil
            AND tr.id_costumer = cs.id_costumer
            AND date(tanggal_rental) >= '$dari'
            AND date (tanggal_rental) <= '$sampai'")->result();

            // var_dump($dari);
            // die();

            // query dibaca :  
            // menampilkan semua data yang ada di tabel transaksi
            // ambil data dari tabel mobil (id_mobil)
            // ambil data dari costumer (id_costumer)
            // AND data yang kita tampilkan adalah data yang lebih besar dari tanggal_rental 

            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/tampilkan_laporan',$data);
            $this->load->view('templates_admin/footer');
        }
    }

    public function _rules(){

        $this->form_validation->set_rules('dari','Dari Tanggal','required');
        $this->form_validation->set_rules('sampai','Sampai Tanggal','required');
    }

   
}
?>