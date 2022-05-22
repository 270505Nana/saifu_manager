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
                    <th>Tgl.Rental</th>
                    <th>Tgl Kembali</th>
                    <th>Harga/H</th>
                    <th>Denda/H</th>
                    <!-- <th>Total Denda</th> -->
                    <th>Tgl.Dikembalikan</th>
                    <th>Status Pengembalian</th>
                    <th>Status Rental</th>
                    <th>Cek Pembayaran</th>
                    <th >Action</th>
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
                
                   
                    <td><?php 
                    if($tr->tanggal_pengembalian == "0000-00-00"){
                        echo "-";
                    }else{
                        echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
                    }
                     ?>
                    </td>
                    <td><?php echo $tr->status_pengembalian ?></td>
                    <td><?php echo $tr->status_rental ?></td>

                    <td>
                       <center>
                           <?php
                           if (empty($tr->bukti_pembayaran)) { ?>
                            <a href=""><i class="fas fa-2x fa-times-circle text-danger"></i></a>
                           <?php }else{ ?>
                            <a href="<?= base_url('admin/data_transaksi/pembayaran/'.$tr->id_rental)?>"><i class="fas fa-2x fa-check-circle"></i></a>
                           <?php } ?>
                       </center>
                    </td>

                    <td>
                        <?php
                        if($tr->status == "1"){
                            echo"-";
                        }else{ ?>
                        <div class="row">
                            <a href="<?= base_url('admin/data_transaksi/transaksi_selesai_nana/'.$tr->id_rental)?>" class="btn btn-sm btn-success mr-2"><i class="fas fa-check"></i></a>
                            <a href="<?= base_url('admin/data_transaksi/transaksi_batal_nana/'.$tr->id_rental)?>" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
                        </div>
                        <?php } ?>
                    </td>
                </tr>
               <?php endforeach;?>
            </table>
        </div>
    </section>
</div>