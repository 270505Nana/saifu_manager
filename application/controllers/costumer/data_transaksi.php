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

    public function pembayaran_aksi_nana(){

        $id                 = $this->input->post('id_rental');
        $bukti_pembayaran   =$_FILES['bukti_pembayaran']['name'];
            if($bukti_pembayaran){
                $config ['upload_path']       ='./assets/upload';
                $config ['allowed_types']     ='jpg|jpeg|png|tiff|pdf';

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('bukti_pembayaran')){
                    echo "bukti_pembayaran Gagal diuplad!";
                }else{
                    $bukti_pembayaran=$this->upload->data('file_name');
                }
            }
        $data = array (
            'bukti_pembayaran' => $bukti_pembayaran
        );

        $where = array(
            'id_rental' => $id
        );

        $this->rental_models->update_data('transaksi', $data, $where);
        $this->session->set_flashdata('pesan','
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong> Bukti Pembayaran Anda Berhasil di Upload! </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        redirect ('costumer/data_transaksi');
    }

    public function cetak_invoice_nana($id){

        $data['transaksi'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, costumer cs
        WHERE tr.id_mobil=mb.id_mobil
        AND tr.id_costumer=cs.id_costumer
        AND tr.id_rental='$id'")->result();

        $this->load->view('costumer/cetak_invoice',$data);
    }
}
?>