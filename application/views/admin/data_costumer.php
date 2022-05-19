<div class="main-content">
    <section class="section">
        
        <div class="section-header">
           <h1>Data Costumer</h1>
        </div>

        <a href="<?= base_url('admin/data_costumer/tambah_data_costumer_nana')?>" class="btn btn-primary mb-3">Tambah Costumer</a>

        <?= $this->session->flashdata('pesan') ?>

        <table class="table table-striped table-responsive table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Alamat</th>
                <th>Gender</th>
                <th>No.Telepon</th>
                <th>No.KTP</th>
                <th>Password</th>
                <th width="180px">Aksi</th>
            </tr>

            <?php
            $no=1;
            foreach ($costumer  as $cs): ?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $cs->nama?></td>
                <td><?= $cs->username?></td>
                <td><?= $cs->alamat?></td>
                <td><?= $cs->gender?></td>
                <td><?= $cs->no_telepon?></td>
                <td><?= $cs->no_ktp?></td>
                <td><?= $cs->password?></td>
                <td>
                    <center>

                        <a href="<?= base_url('admin/data_costumer/detail_costumer_nana/').$cs->id_costumer ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>

                        <a href="<?= base_url('admin/data_costumer/update_costumer_nana/').$cs->id_costumer ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>

                        <a onclick="return confirm('Hapus Data?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/data_costumer/delete_costumer_nana/').$cs->id_costumer ?>"><i class="fas fa-trash"></i></a>
                    </center>
                </td>
            </tr>
            <?php endforeach;?>
        </table>
    </section>
</div>