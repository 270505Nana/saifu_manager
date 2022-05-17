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

    public function tambah_data_mobil_nana(){

        $data['tipe']  = $this->rental_models->get_data('tipe')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tambah_data_mobil',$data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_mobil_aksi_nana(){

        $this->_rules();
        if($this->form_validation->run() ==FALSE){
           $this->tambah_data_mobil_nana();
        }else{
            $kode_type  = $this->input->post('kode_type');
            $merk       = $this->input->post('merk');
            $no_plat    = $this->input->post('no_plat');
            $warna      = $this->input->post('warna');
            $tahun      = $this->input->post('tahun');
            $status     = $this->input->post('status');
            $gambar            =$_FILES['gambar']['name'];
            if($gambar=''){}else{
                $config ['upload_path']       ='./assets/upload';
                $config ['allowed_types']     ='jpg|jpeg|png|tiff';
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('gambar')){
                    echo "Gambar Gagal diuplad!";
                }else{
                    $gambar=$this->upload->data('file_name');
                }
            }

            $data=array(
                'kode_type' => $kode_type,
                'merk'      => $merk,
                'no_plat'   => $no_plat,
                'warna'     => $warna,
                'tahun'     => $tahun,
                'status'    => $status,
                'gambar'    => $gambar
            );

            $this->rental_models->insert_data($data,'mobil');
            $this->session->set_flashdata('pesan','
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> Data Berhasil ditambahkan! </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
            redirect ('admin/data_mobil');
        }

    }

    public function _rules(){
        // for form_validation

        $this->form_validation->set_rules('kode_type','Kode Tipe','required');
        $this->form_validation->set_rules('merk','Merk','required');
        $this->form_validation->set_rules('no_plat','No Plat','required');
        $this->form_validation->set_rules('tahun','Tahun','required');
        $this->form_validation->set_rules('warna','Warna','required');
        $this->form_validation->set_rules('status','Status','required');
    }
}
?>