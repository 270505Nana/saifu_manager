<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Laporan Transaksi</h1>
        </div>
    </section>

    <form action="<?= base_url('admin/data_laporan')?>" method="post">
        <div class="form-group">
            <label for="">Dari Tanggal</label>
            <input type="date" name="dari" class="form-control" >

            <?= form_error('dari','<span class="text-small text-danger">','</span>')?>
        </div>

        <div class="form-group">
            <label for="">Sampai Tanggal</label>
            <input type="date" name="sampai" class="form-control" >

            <?= form_error('sampai','<span class="text-small text-danger">','</span>')?>
        </div>

        <button type="submit" class="btn btn-primary mb-3" style="width:100%"> <i class="fas fa-eye"></i> Tampilkan Data</button>
    </form>
   
    <div class="btn-group">
        <a class="btn btn-success" style="width:1270px" target="_blank"
        href="<?= base_url().'admin/data_laporan/print_laporan_nana/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>">
        <i class="fas fa-print"></i>
        Print Laporan</a>
    </div><hr>

    <div class="table-responsive mt-5">
        <table class="table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>Customer</th>
                <th>Mobil</th>
                <th>Tgl.Rental</th>
                <th>Tgl Kembali</th>
                <th>Harga/H</th>
                <th>Denda/H</th>
                <th>Total Denda</th>
                <th>Tgl.Dikembalikan</th>
                <th>Status Pengembalian</th>
                <th>Status Rental</th>
            </tr>

            <?php 
            $no=1;
            foreach ($laporan  as $tr) : ?>
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $tr->nama?></td>
                    <td><?= $tr->merk?></td>
                    <td><?= date('d/m/Y', strtotime($tr->tanggal_rental))?></td>
                    <td><?= date('d/m/Y', strtotime($tr->tanggal_kembali))?></td>
                    <td>Rp.<?= number_format($tr->harga,0,',','.') ?></td>
                    <td>Rp.<?= number_format($tr->denda,0,',','.')?></td>
                    <td>Rp.<?= number_format($tr->total_denda,0,',','.')?></td>
                
                    
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
                </tr>
            <?php endforeach;?>
        </table>
    </div>    
</div>