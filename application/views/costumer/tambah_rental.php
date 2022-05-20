<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>CAR RENTAL</h4>
              <h2>Tambah Rental Mobil</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container" style="margin-top:50px">
        <form action="<?= base_url('costumer/rental/tambah_rental_aksi_nana')?>" method="post">
            <div class="card ">
                <div class="card-header">
                    Tambah Rental
                </div>
                <div class="card-body">
                    <?php foreach ($detail as $dt ) : ?>
                        <div class="row">
                            <!-- dibagi jadi dua sisi -->
                            <div class="col-md-6">
                                <img style="width:500px" src="<?= base_url('assets/upload/'.$dt->gambar)?>" alt="">
                            </div>

                            <div class="col-md-6">

                                <!-- FORM INPUT -->
                                <div class="form-group">
                                    <label for="">Harga Sewa/Hari</label>
                                    <input type="hidden" name="id_mobil" value="<?= $dt->id_mobil?>">
                                    <input type="text" name="harga" class="form-control" value="<?= $dt->harga?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="">Denda/Hari</label>
                                    <input type="text" name="denda" class="form-control" value="<?= $dt->denda?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="">Tanggal Rental</label>
                                    <input type="date" name="tanggal_rental" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Tanggal Kembali</label>
                                    <input type="date" name="tanggal_kembali" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary">RENTAL</button>
                            </div>
                        </div>
                    <?php endforeach;?>
                    
                </div>
            </div>
        </form>
    </div>
</div>

   