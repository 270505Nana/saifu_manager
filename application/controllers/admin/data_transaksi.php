<?php
class data_transaksi extends CI_Controller{

    public function index(){

        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, costumer cs
        WHERE tr.id_mobil=mb.id_mobil
        AND tr.id_costumer=cs.id_costumer")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_transaksi',$data);
        $this->load->view('templates_admin/footer');
    }

    public function pembayaran($id){

        $where = array('id_rental' => $id);
        $data['pembayaran'] = $this->db->query("SELECT * FROM transaksi WHERE id_rental='$id'")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/konfirmasi_pembayaran',$data);
        $this->load->view('templates_admin/footer');
    }

    public function cek_pembayaran_nana(){

        $id                   = $this->input->post('id_rental');
        $status_pembayaran    = $this->input->post('status_pembayaran');

        $data = array(
            'status_pembayaran'     => $status_pembayaran
        );

        $where = array(
            'id_rental' => $id
        );

        // setelah ambil semua inputnya dikeep dalam var
        // datanya di update

        $this->rental_models->update_data('transaksi',$data,$where);
        redirect('admin/data_transaksi');
    }

    public function download_pembayaran_nana($id){

        $this->load->helper('download');
        // untuk memanggil function di dalam model
        $file_pembayaran = $this->rental_models->download_pembayaran_nana($id);
        $file = 'assets/upload/'.$file_pembayaran['bukti_pembayaran'];
        // masukkan sebuah function dari php
        force_download($file,NULL);
    }

    public function transaksi_selesai_nana($id){

        $where = array('id_rental' => $id);
        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi WHERE id_rental='$id'")->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/transaksi_selesai',$data);
        $this->load->view('templates_admin/footer');
    }
    
    public function transaksi_selesai_aksi_nana(){

        $id                   = $this->input->post('id_rental');
        $tanggal_pengembalian = $this->input->post('tanggal_pengembalian');
        $status_rental        = $this->input->post('status_rental');
        $status_pengembalian  = $this->input->post('status_pengembalian');
        $tanggal_kembali      = $this->input->post('tanggal_kembali');
        $denda                = $this->input->post('denda');

        $x                    = strtotime($tanggal_pengembalian);
        $y                    = strtotime($tanggal_kembali);
        $selisih              = abs($x - $y)/(60*60*24);
        // untuk mengkonversi ke harii bisa juga ke jam
        // urutannya konver ke menit -> jam -> hari
        // defaultnya kalau di var_dump dia dalam bentuk detik
        // 60 : 1 menit 60 detik (1 menit)
        // 60 : 1 jam 60 menit   (1 jam)
        // 24 : 1 hari 24 jam    (1 hari)
        $total_denda          = $selisih * $denda;

        $data = array(
            'tanggal_pengembalian'  =>  $tanggal_pengembalian,
            'status_rental'         =>  $status_rental,
            'status_pengembalian'   =>  $status_pengembalian,
            'total_denda'           =>  $total_denda
        );

        $where = array('id_rental' => $id);

        $this->rental_models->update_data('transaksi',$data,$where);

        $this->session->set_flashdata('pesan','
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> Transaksi Berhasil di Update! </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin/data_transaksi');
    }

    public function transaksi_batal_nana($id){

        $where = array('id_rental' => $id);
        $data  = $this->rental_models->get_where($where,'transaksi')->row();
        $where2=array('id_mobil' => $data->id_mobil);

        $data2=array('status' => '1');
        // var_dump($where2);
        // die();
        $this->rental_models->update_data('mobil', $data2,$where2);
        $this->rental_models->delete_data($where,'transaksi');
        $this->session->set_flashdata('pesan','
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> Transaksi Berhasil diBatalkan! </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect('admin/data_transaksi');
    }
}  
?>