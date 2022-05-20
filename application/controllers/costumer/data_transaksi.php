<?php
class data_transaksi extends CI_Controller{

    public function index(){

        $costumer = $this->session->userdata('id_costumer');

        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, costumer cs
        WHERE tr.id_mobil=mb.id_mobil
        AND tr.id_costumer=cs.id_costumer
        AND cs.id_costumer='$costumer'
        ORDER BY id_rental DESC")->result();

        $this->load->view('templates_costumer/header');
        $this->load->view('costumer/data_transaksi',$data);
        $this->load->view('templates_costumer/footer');
    }

    public function pembayaran_nana($id){

        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, costumer cs
        WHERE tr.id_mobil=mb.id_mobil
        AND tr.id_costumer=cs.id_costumer
        AND tr.id_rental='$id'
        ORDER BY id_rental DESC")->result();

        $this->load->view('templates_costumer/header');
        $this->load->view('costumer/data_pembayaran',$data);
        $this->load->view('templates_costumer/footer');

    }
}
?>