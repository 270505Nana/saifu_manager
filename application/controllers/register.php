<?php
class register extends CI_Controller{

    public function index(){

        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates_admin/header');
            $this->load->view('register_form');
            $this->load->view('templates_admin/footer');
        }else{

            $id          = $this->input->post('id_costumer');
            $nama        = $this->input->post('nama');
            $username    = $this->input->post('username');
            $alamat      = $this->input->post('alamat');
            $gender      = $this->input->post('gender');
            $no_telepon  = $this->input->post('no_telepon');
            $no_ktp      = $this->input->post('no_ktp');
            $password    = $this->input->post('password');
            $role_id     = '2';

            $data = array(
                'nama'       => $nama,
                'username'   => $username,
                'alamat'     => $alamat,
                'gender'     => $gender,
                'no_telepon' => $no_telepon,
                'no_ktp'     => $no_ktp,
                'password'   => $password,
                'role_id'    => $role_id
            );

            $this->rental_models->insert_data($data, 'costumer');
            // data dimasukkan ke tabel costumer

            $this->session->set_flashdata('pesan','
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> Berhasil Register Silahkan Login! </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect ('auth/login');
        }
       
    }

    public function _rules(){

        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('gender','gender','required');
        $this->form_validation->set_rules('no_telepon','no_telepon','required');
        $this->form_validation->set_rules('no_ktp','no_ktp','required');
        $this->form_validation->set_rules('password','password','required');
    }
}
?>