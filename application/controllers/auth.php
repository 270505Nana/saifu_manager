<?php

class Auth extends CI_Controller{

    public function login()
    {
        // $this->_rules();

        // if($this->form_validation->run() == FALSE){
        //     $this->load->view('templates_admin/header');
        //     $this->load->view('form_login'); 
        //     $this->load->view('templates_admin/footer');    
        // }else{
        //     $username = $this->input->post('username');
        //     $password = $this->input->post('password');

        //     $cek = $this->saifu_models->cek_login($username, $password);

        //     if($cek == FALSE)
        //     {
        //         $this->session->set_flashdata('pesan',' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        //             <strong> Username atau Password Anda Salah! </strong>
        //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //             <span aria-hidden="true">&times;</span>
        //         </button>
        //         </div>');
        //         redirect('auth/login');
        //     }else{
        //         $this->session->set_userdata('username',$cek->username);
        //         $this->session->set_userdata('role_id',$cek->role_id);
        //         $this->session->set_userdata('nama',$cek->nama);
        //         $this->session->set_userdata('id_costumer',$cek->id_costumer);

        //         switch ($cek->role_id) {
        //             case 1 : redirect('admin/dashboard');
        //                      break;
        //             case 2 : redirect('costumer/dashboard');
        //                      break;
                    
        //             default: break;
        //         }
        //     }
        // }

        $this->load->view('templates_admin/header');
        $this->load->view('form_login'); 
        $this->load->view('templates_admin/footer');    

        
    }
    public function _rules()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
    }

    public function logout()
    {
        // destroy session
        // $this->session->sess_destroy();
        redirect('auth/login');
    }

    public function ganti_password()
    {
        $this->load->view('templates_admin/header');
        $this->load->view('ganti_password'); 
        $this->load->view('templates_admin/footer');    
    }

    public function ganti_password_aksi()
    {
        
        // Data yang diinput disimpam dalam variable
        $pass_baru   = $this->input->post('pass_baru');
        $ulang_pass  = $this->input->post('ulang_pass');

        $this->form_validation->set_rules('pass_baru','Password Baru','required|matches[ulang_pass] ');
        $this->form_validation->set_rules('ulang_pass','Ulangi Password ','required');

        if ($this->form_validation->run() != false) {
            // Kalau form_validationnya tidak false = true
            $data = array('password' => $pass_baru);

            $id = array('id_costumer' => $this->session->userdata('id_costumer'));

            // masukkan query
            $this->saifu_models->update_password('costumer',$data,$id);
            $this->session->set_flashdata('pesan','
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Password Berhasil di Ubah</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');

            redirect('auth/login');
        }else{
           
            $this->load->view('templates_admin/header');
            $this->load->view('ganti_password'); 
            $this->load->view('templates_admin/footer'); 
        }

       
    }

}

?>