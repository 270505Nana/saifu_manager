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

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <td>No</td>
                    <td>Nama Costumer</td>
                    <td>Merk Mobil</td>
                    <td>No  Plat</td>
                    <td>Harga Sewa</td>
                    <td width="85px">Aksi</td>
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
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>


   