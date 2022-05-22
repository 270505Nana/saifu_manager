<!-- HEADER TITLE -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Transaksi Selesai</h1>
        </div>
    </section>
    <?php $this->session->flashdata('pesan')?>
    <?php foreach ($transaksi as $tr ) : ?>
    <form method="POST" action="<?= base_url('admin/data_transaksi/transaksi_selesai_aksi_nana')?>">
        <input type="hidden" name="id_rental" value="<?= $tr->id_rental ?>">
        <input type="hidden" name="tanggal_kembali" value="<?= $tr->tanggal_kembali?>">
        <input type="hidden" name="denda" value="<?= $tr->denda?>">

        <div class="form-group">
            <label for="">Tanggal Pengembalian</label>
            <input type="date" name="tanggal_pengembalian" class="form-control" value="<?=  $tr->tanggal_pengembalian?>">
        </div>

        <div class="form-group">
            <label for="">Status Pengembalin</label>
            <select name="status_pengembalian" class="form-control">
                <option value="<?= $tr->status_pengembalian?>"><?= $tr->status_pengembalian?></option>
                <option value="Kembali">Kembali</option>
                <option value="Belum Kembali">Belum Kembali</option>
            </select>
        </div>

        <div class="form-group">
            <label for="">Status Rental</label>
            <select name="status_rental" class="form-control">
                <option value="<?= $tr->status_rental?>"><?= $tr->status_rental?></option>
                <option value="Selesai">Selesai</option>
                <option value="Belum Selesai">Belum Selesai</option>
            </select>
        </div>

        <button style="width:100%" type="submit" class="btn btn-success">SIMPAN</button>
    </form>
    <?php endforeach;?>
</div>

