<div class="main-content">
    <section class="section">
        
        <div class="section-header">
           <h1>Edit Data Mobil</h1>
        </div>

        <div class="card">
            <div class="card-body">

                <?php foreach ($mobil as $mb ): ?>

                    <form method="POST" action="<?= base_url('admin/data_mobil/update_mobil_aksi_nana')?>" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="">Tipe Mobil</label>
                                    <input type="hidden" name="id_mobil" value="<?= $mb->id_mobil?>">
                                    <select name="kode_type" id="" class="form-control">
                                        <option value="<?= $mb->kode_type?>"><?= $mb->kode_type?></option>
                                        <?php foreach ($tipe as $tp) : ?>
                                            <option value="<?= $tp->kode_tipe?>"><?= $tp->nama_tipe?></option>
                                        <?php endforeach;?>
                                    </select>

                                    <?= form_error('kode_type','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
                                </div>

                                <div class="form-group">
                                    <label for="">Merk</label>
                                    <input type="text" name="merk" class="form-control" value="<?= $mb->merk?>">

                                    <?= form_error('merk','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
                                </div>
                                
                                <div class="form-group">
                                    <label for="">No.Plat</label>
                                    <input type="text" name="no_plat" class="form-control" value="<?= $mb->no_plat?>">

                                    <?= form_error('no_plat','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
                                </div>

                                <div class="form-group">
                                    <label for="">Warna</label>
                                    <input type="text" name="warna" class="form-control" value="<?= $mb->warna?>">

                                    <?= form_error('warna','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                        <label for="">Tahun</label>
                                        <input type="number" name="tahun" class="form-control" value="<?= $mb->tahun?>">

                                        <?= form_error('tahun','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option <?php if($mb->status == "1"){echo "selected='selected'"; }
                                            echo $mb->status;?> value="1">Tersedia</option>

                                            <option <?php if($mb->status == "0"){echo "selected='selected'"; }
                                            echo $mb->status;?> value="0">Tidak Tersedia</option>
                                        </select>
                                        <?= form_error('status','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Gambar</label>
                                        <input type="file" name="gambar" class="form-control">

                                    </div>

                                    <center>
                                        <button type="submit" class="btn btn-primary mt-4">SIMPAN</button>
                                        <button type="reset" class="btn btn-danger mt-4 ml-5">RESET</button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php endforeach;?>
            </div>
        </div>
    </section>
</div>
