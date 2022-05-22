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
}
?>