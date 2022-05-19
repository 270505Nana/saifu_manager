<?php
class data_costumer extends CI_Controller{

    public function index(){

        $data['costumer'] = $this->rental_models->get_data('costumer')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_costumer',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_data_costumer_nana(){

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tambah_data_costumer');
        $this->load->view('templates_admin/footer');
    }

    public function tambah_data_costumer_aksi_nana(){

        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->tambah_data_costumer_nana();
        }else{
            // menangkap data dari method post

            $nama      = $this->input->post('nama');
            $username  = $this->input->post('username');
            $alamat    = $this->input->post('alamat');
            $gender    = $this->input->post('gender');
            $no_telepon= $this->input->post('no_telepon');
            $no_ktp    = $this->input->post('no_ktp');
            $password  = md5($this->input->post('password'));
        }

        $data = array(
            'nama'       => $nama,
            'username'   => $username,
            'alamat'     => $alamat,
            'gender'     => $gender,
            'no_telepon' => $no_telepon,
            'no_ktp'     => $no_ktp,
            'password'   => $password,
        );

        $this->rental_models->insert_data($data, 'costumer');
        // data dimasukkan ke tabel costumer

        $this->session->set_flashdata('pesan','
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> Data Berhasil ditambahkan! </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect ('admin/data_costumer');
    }

    public function update_costumer_nana($id){

     $where = array('id_costumer' => $id);
     $data['costumer'] = $this->db->query("SELECT * FROM costumer WHERE id_costumer = '$id'")->result();

     $this->load->view('templates_admin/header');
     $this->load->view('templates_admin/sidebar');
     $this->load->view('admin/update_data_costumer',$data);
     $this->load->view('templates_admin/footer');

    }

    public function update_costumer_aksi_nana(){

        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->update_costumer_nana();
        }else{
            // menangkap data dari method post

            $id          = $this->input->post('id_costumer');
            $nama        = $this->input->post('nama');
            $username    = $this->input->post('username');
            $alamat      = $this->input->post('alamat');
            $gender      = $this->input->post('gender');
            $no_telepon  = $this->input->post('no_telepon');
            $no_ktp      = $this->input->post('no_ktp');
            $password    = md5($this->input->post('password'));


            $data = array(
                'nama'       => $nama,
                'username'   => $username,
                'alamat'     => $alamat,
                'gender'     => $gender,
                'no_telepon' => $no_telepon,
                'no_ktp'     => $no_ktp,
                'password'   => $password
            );

            $where = array(
                'id_costumer' => $id
            );
            $this->rental_models->update_data('costumer', $data, $where);
            // data dimasukkan ke tabel costumer

            $this->session->set_flashdata('pesan','
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong> Data Berhasil diupdate! </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                redirect ('admin/data_costumer');
       }
    }

    public function delete_costumer_nana($id){
            
        $where = array ('id_costumer' => $id);
        $this->rental_models->delete_data($where,'costumer');

        $this->session->set_flashdata('pesan','
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> Data Berhasil dihapus! </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect ('admin/data_costumer');
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