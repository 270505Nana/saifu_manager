<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="text-content">
            <h4>CAR RENTAL</h4>
            <h2>Cek Pembayaran</h2>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="container mt-5 mr-5">
    <div class="row">
        <div class="col-md-8">
        <div class="card mx-auto">
                <div class="card-header alert alert-primary">
                    Invoice Pembayaran Anda
                </div>

                <div class="card-body">
                    <table class="table">
                        <?php foreach ($transaksi as $tr) : ?>
                            <tr>
                                <th>Merk Mobil</th>
                                <td>:</td>
                                <td><?= $tr->merk?></td>
                            </tr>

                            <tr>
                                <th>Tanggal Rental</th>
                                <td>:</td>
                                <td><?= $tr->tanggal_rental?></td>
                            </tr>

                            <tr>
                                <th>Tanggal Kembali</th>
                                <td>:</td>
                                <td><?= $tr->tanggal_kembali?></td>
                            </tr>

                            <tr>
                                <th>Biaya Sewa /Hari</th>
                                <td>:</td>
                                <td>Rp. <?= number_format($tr->harga,0,',','.')?></td>
                            </tr>

                            <tr>
                                <?php
                                    $x = strtotime ($tr->tanggal_kembali);
                                    $y = strtotime ($tr->tanggal_rental);
                                    $jumlah_hari = abs(($x - $y)/(60*60*24));
                                ?>
                                <th>Jumlah Hari Sewa</th>
                                <td>:</td>
                                <td><?= $jumlah_hari?> Hari</td>
                            </tr>

                            <tr class="text-success">
                                <th>JUMLAH PEMBAYARAN</th>
                                <td>:</td>
                                <td>
                                    <button class="btn btn-sm btn-success" disabled>
                                        Rp. <?= number_format($tr->harga * $jumlah_hari,0,',','.')?>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td><a href="<?= base_url('costumer/data_transaksi/cetak_invoice_nana/'.$tr->id_rental) ?>" class="btn btn-sm btn-secondary">Print Invoice</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header alert alert-success" >
                    Informasi Pembayaran
                </div>

                <div class="card-body">
                    <p class="text-success mb-4">Silahkan Melakukan Pembayaran Melalui Nomor Rekening di Bawah Ini:</p>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Mandiri 12242145824</li>
                        <li class="list-group-item">BCA 382713852147</li>
                        <li class="list-group-item">BNI 1932397261</li>
                    </ul>

                    <?php
                        if (empty($tr->bukti_pembayaran)) { ?>
                        <!-- Button trigger modal -->
                        <button style="width: 100%" type="button" class="btn btn-sm btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
                        Upload Bukti Pembayaran
                        </button> 
                    <?php }elseif($tr->status_pembayaran == '0'){ ?>
                        <button style="width:100%" class="btn btn-sm btn-warning mt-3"><i class="fa fa-clock-o"></i>Menunggu Konfirmasi</button>
                    <?php }elseif($tr->status_pembayaran == '1'){ ?>
                        <button style="width:100%" class="btn btn-sm btn-success mt-3"><i class="fa fa-check"></i>Pembayaran Selesai</button> 
                    <?php } ?>
                </div>
            </div>
        </div>     
    </div>
</div>

<!-- Modal upload bukti pembayaran-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- untukk menangkap datanya -->
        <form action="<?= base_url('costumer/data_transaksi/pembayaran_aksi_nana')?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Upload Bukti Pembayaran</label>
                    <input type="hidden" name="id_rental" value="<?= $tr->id_rental?>">
                    <input type="file" name="bukti_pembayaran" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button style="width:100%"type="submit" class="btn btn-success">UPLOAD BUKTI</button>
            </div>
        </form>
    </div>
  </div>
</div>