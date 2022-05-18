<?php

class Data_mobil extends CI_Controller{
    
    public function index()
    {
        $data['mobil'] = $this->rental_models->get_data('mobil')->result();
        $this->load->view('templates_costumer/header');
        $this->load->view('costumer/data_mobil', $data);
        $this->load->view('templates_costumer/footer');
    }

    public function detail_mobil_nana($id)
    {
        $data['detail'] = $this->rental_models->ambil_id_mobil_nana($id);
        $this->load->view('templates_costumer/header');
        $this->load->view('costumer/detail_mobil', $data);
        $this->load->view('templates_costumer/footer');
    }
}
?>