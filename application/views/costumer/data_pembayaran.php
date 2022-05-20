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
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4"></div>
    </div>
</div>