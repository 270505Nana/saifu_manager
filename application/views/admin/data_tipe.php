<div class="main-content">
    <section class="section">
        
        <div class="section-header">
           <h1>Data Tipe Mobil</h1>
        </div>
    </section>

    <a class="btn btn-primary mb-3"href="<?= base_url('admin/data_tipe/tambah_tipe_nana')?>">Tambah Tipe</a>

    <?= $this->session->flashdata('pesan') ?>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th width="20px">No</th>
                <th>Kode Tipe</th>
                <th>Nama Tipe</th>
                <th width="180px">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            $no = 1;
            foreach ($tipe as $tp ) : ?>
            <tr>
                <td><?=$no++?></td>
                <td><?= $tp->kode_tipe ?></td>
                <td><?= $tp->nama_tipe ?></td>
                <td>
                    <center>
                        <a href="<?= base_url('admin/data_tipe/update_tipe_nana/').$tp->id_tipe ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>

                        <a onclick="return confirm('Hapus Data?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/data_tipe/delete_tipe_nana/').$tp->id_tipe ?>"><i class="fas fa-trash"></i></a>
                    </center>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>  