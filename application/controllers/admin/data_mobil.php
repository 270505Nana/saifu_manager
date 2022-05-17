<?php
class data_mobil extends CI_Controller{

    public function index(){

        $data['mobil'] = $this->rental_models->get_data('mobil')->result();
        $data['tipe']  = $this->rental_models->get_data('tipe')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_mobil',$data);
        $this->load->view('templates_admin/footer');
    }
}
?>