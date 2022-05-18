<div class="main-content">
    <section class="section">
        
        <div class="section-header">
           <h1>Tambah Data Tipe Mobil</h1>
        </div>
    </section>

    <form method="POST" action="<?= base_url('admin/data_tipe/tambah_tipe_aksi_nana')?>">
        <div class="form-group">
            <label for="">Kode Tipe</label>
            <input type="text" name="kode_tipe" class="form-control">

            <?= form_error('kode_tipe','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
        </div>

        <div class="form-group">
            <label for="">Nama Tipe</label>
            <input type="text" name="nama_tipe" class="form-control">

            <?= form_error('nama_tipe','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
        </div>

        <button type="submit" class="btn btn-primary">SIMPAN</button>
        <button type="reset" class="btn btn-danger">RESET</button>
    </form>
</div>
