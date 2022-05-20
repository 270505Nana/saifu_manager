<?php
class rental extends CI_Controller{

    public function tambah_rental($id)
    {
        $data['detail'] = $this->rental_models->ambil_id_mobil_nana($id);
        $this->load->view('templates_costumer/header');
        $this->load->view('costumer/tambah_rental', $data);
        $this->load->view('templates_costumer/footer');
    }

    public function tambah_rental_aksi_nana(){

        $id_costumer       =$this->session->userdata('id_costumer');
        $id_mobil          = $this->input->post('id_mobil');
        $tanggal_rental    = $this->input->post('tanggal_rental');
        $tanggal_kembali   = $this->input->post('tanggal_kembali');
        $denda             = $this->input->post('denda');
        $harga             = $this->input->post('harga');

        $data = array(
            'id_costumer'         => $id_costumer,
            'id_mobil'            => $id_mobil,
            'tanggal_rental'      => $tanggal_rental,
            'tanggal_kembali'     => $tanggal_kembali,
            'denda'               => $denda,
            'harga'               => $harga,
            'tanggal_pengembalian'=> '-',
            'status_rental'       => 'Belum Selesai',
            'status_pengembalian' => 'Belum Kembali',
        );

        $this->rental_models->insert_data($data,'transaksi');

        $status = array(
            'status' => '0'
        );

        $id = array(
            'id_mobil' => $id_mobil
        );

        $this->rental_models->update_data('mobil', $status, $id);
        $this->session->set_flashdata('pesan','
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> Transaksi Berhasil, Silahkan Checkout!  </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect ('costumer/data_mobil');

    }
}
?>