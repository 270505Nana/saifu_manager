<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="text-content">
            <h4>CAR RENTAL</h4>
            <h2>Data Transaksi</h2>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="container">
    <div class="card mx-auto" style="margin-top: 50px; width:80%">
        <div class="card-header">
            Data Transaksi Anda
        </div>
        <span><?= $this->session->flashdata('pesan')?></span>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama Costumer</th>
                    <th>Merk Mobil</th>
                    <th>No  Plat</th>
                    <th>Harga Sewa</th>
                    <th width="85px">Aksi</th>
                    <th>Batal</th>

                </tr>

                <?php 
                $no=1;
                foreach ($transaksi as $tr) : ?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $tr->nama?></td>
                        <td><?= $tr->merk?></td>
                        <td><?= $tr->no_plat?></td>
                        <td>Rp.<?= number_format($tr->harga,0,',','.')?></td>
                        <td>
                            <?php if ($tr->status_rental == "Selesai") { ?>
                               <button class="btn btn-sm btn-warning">Rental Selesai</button>
                            <?php }else{ ?>
                                <a href="<?= base_url('costumer/data_transaksi/pembayaran_nana/'.$tr->id_rental)?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                            <?php } ?>
                        </td>
                        <td>
                            <?php if ($tr->status_rental == 'Belum Selesai') { ?>
                                <!-- transaksi belum selesai -->
                                <a onclick="return confirm('Batalkan Rental?')"href="<?= base_url('costumer/data_transaksi/batal_transaksi_nana/'.$tr->id_rental)?>" class="btn btn-sm btn-danger">Batal Rental</a>
                            <?php }else{ ?>
                                <!-- transaksi selesai -->
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">Batal Rental</button>
                            <?php } ?> 
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi Batal Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Maaf Transaksi Sudah Selesai, Tidak Bisa Dibatalkan
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Oke</button>
      </div>
    </div>
  </div>
</div>


   