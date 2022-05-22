<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Konfirmasi Pembayaran</h1>
        </div>

        <center class="card" style="width: 55%">
            <div class="card-header">
                Konfirmasi Pembayaran
            </div>

            <div class="card-body">
                <form action="<?= base_url('admin/data_transaksi/cek_pembayaran_nana')?>" method="post">
                    <?php foreach ($pembayaran as $pmb ) : ?>
                        <a class="btn btn-sm btn-success"href="<?= base_url('admin/data_transaksi/download_pembayaran_nana/'.$pmb->id_rental)?>"><i class="fas fa-download"></i>Download Bukti Pembayaran</a>

                        <div class="custom-control custom-switch ml-5">
                            <input class="custom-control-input" type="hidden"  value="<?php echo $pmb->id_rental?>" name="id_rental">
                            <input class="custom-control-input" type="checkbox" id="customSwitch1" value="1" name="status_pembayaran">
                            <label class="custom-control-label" for="customSwitch1">Konfirmasi Pembayaran</label>
                        </div>  
                        <hr>
                        <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                    <?php endforeach;?>
                </form>
            </div>
        </center>
    </section>
</div>