<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Transaksi</h1>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Customer</th>
                    <th>Mobil</th>
                    <th>Tgl. Rental</th>
                    <th>Tgl. Kembali</th>
                    <th>Harga/Hari</th>
                    <th>Denda/Hari</th>
                    <!-- <th>Total Denda</th> -->
                    <th>Tgl. Dikembalikan</th>
                    <th>Status Pengembalian</th>
                    <th>Status Rental</th>
                    <!-- <th>Cek Pembayaran</th> -->
                    <th>Action</th>
                </tr>

                <?php 
                $no=1;
                foreach ($transaksi  as $tr) : ?>
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $tr->nama?></td>
                    <td><?= $tr->merk?></td>
                    <td><?= date('d/m/Y', strtotime($tr->tanggal_rental))?></td>
                    <td><?= date('d/m/Y', strtotime($tr->tanggal_kembali))?></td>
                    <td>Rp.<?= number_format($tr->harga,0,',','.') ?></td>
                    <td>Rp.<?= number_format($tr->denda,0,',','.')?></td>
                    <!-- <td><?= $tr->nama?></td> -->
                    <td><?php 
                    if($tr->tanggal_pengembalian == "0000-00-00"){
                        echo "-";
                    }else{
                        echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
                    }
                     ?>
                    </td>
                    <td>
                        <?php
                        if($tr->status == "1"){
                            echo"Kembali";
                        }else{
                            echo "Belum Kembali";
                        }
                        ?>
                    </td>

                    <td>
                        <?php
                        if($tr->status == "1"){
                            echo"Kembali";
                        }else{
                            echo "Belum Kembali";
                        }
                        ?>
                    </td>

                    <td>
                        <?php
                        if($tr->status == "1"){
                            echo"-";
                        }else{ ?>
                        <div class="row">
                            <a href="<?= base_url('admin/transaksi/transaksi_selesai')?>" class="btn btn-sm btn-success mr-2"><i class="fas fa-check"></i></a>
                            <a href="<?= base_url('admin/transaksi/transaksi_batal')?>" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
                        </div>
                        <?php } ?>
                        <!-- <center>
                            <a href="<?= base_url('admin/data_mobil/detail_mobil_nana/').$mb->id_mobil ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>

                            <a href="<?= base_url('admin/data_mobil/update_mobil_nana/').$mb->id_mobil ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>

                            <a onclick="return confirm('Hapus Data?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/data_mobil/delete_mobil_nana/').$mb->id_mobil ?>"><i class="fas fa-trash"></i></a>
                        </center> -->
                    </td>
                </tr>
               <?php endforeach;?>
            </table>
        </div>
    </section>
</div>