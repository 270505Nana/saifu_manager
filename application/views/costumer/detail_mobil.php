<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>CAR RENTAL</h4>
              <h2>Detail Data Mobil</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
        <div class="card ">
            <div class="card-body">
                <?php foreach ($detail as $dt ) : ?>
                    <div class="row">
                        <!-- dibagi jadi dua sisi -->
                        <div class="col-md-6">
                            <img style="width:500px" src="<?= base_url('assets/upload/'.$dt->gambar)?>" alt="">
                        </div>

                        <div class="col-md-6">
                            <table class="table">
                                <tr>
                                    <th>Merk</th>
                                    <td><?= $dt->merk?></td>
                                </tr>

                                <tr>
                                    <th>No.Plat</th>
                                    <td><?= $dt->no_plat?></td>
                                </tr>

                                <tr>
                                    <th>Tahun</th>
                                    <td><?= $dt->tahun?></td>
                                </tr>

                                <tr>
                                    <th>Status</th>
                                    <td><?php if ( $dt->status == '1') {
                                        echo"Tersedia";
                                    }else{echo "Tidak Tersedia/Sedang di Rental ";}?>
                                    </td>
                                </tr>

                                <tr>
                                <td></td>
                                    <td>
                                    <a href="<?php echo base_url('costumer/data_mobil')?>" class="btn btn-warning ml-2 mt-2">Kembali</a> 
                                    <?php
                                        if ($dt->status == "0") { 
                                            echo "<button class='btn btn-danger ml-2 mt-2' disable>Telah di Sewa</button>";
                                        }else{
                                            echo anchor('costumer/rental/tambah_rental'.$dt->id_mobil, 
                                            '<button class="btn btn-success ml-2 mt-2">Rental</button>');
                                        }?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>

   