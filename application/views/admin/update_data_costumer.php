<div class="main-content">
    <section class="section">
        
        <div class="section-header">
           <h1> Update Data Costumer</h1>
        </div>
    </section>

    <?php foreach ($costumer as $cs ) :?>

        <form  method = "POST" action="<?= base_url('admin/data_costumer/update_costumer_aksi_nana')?>" >
            <div class="form-group">
                <label for="">Nama</label>
                <input type="hidden" name="id_costumer" value="<?= $cs->id_costumer?>">
                <input type="text" name="nama" value="<?= $cs->nama?>" class="form-control" >
                
                <?= form_error('nama','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
            </div>

            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" value="<?= $cs->username ?>" class="form-control">
                
                <?= form_error('username','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
            </div>

            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="alamat" value="<?= $cs->alamat?>" class="form-control">
                
                <?= form_error('alamat','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
            </div>

            <div class="form-group">
                <label for="">Gender</label>
            <select name="gender" id="" class="form-control">
                <option value="<?= $cs->gender?>"><?= $cs->gender?></option>
                <option value="<?= $cs->gender?>">Laki-Laki</option>
                <option value="<?= $cs->gender?>">Perempuan</option>
            </select>
                
                <?= form_error('gender','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
            </div>

            <div class="form-group">
                <label for="">No.Telepon</label>
                <input type="number" name="no_telepon" value="<?= $cs->no_telepon?>" class="form-control">
                
                <?= form_error('no_telepon','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
            </div>

            <div class="form-group">
                <label for="">No.KTP</label>
                <input type="number" name="no_ktp" value="<?= $cs->no_ktp?>" class="form-control">
                
                <?= form_error('no_ktp','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" value="<?= $cs->password?>" class="form-control">
                
                <?= form_error('password','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
            </div>

            <button type="submit" class="btn btn-primary">SIMPAN</button>
            <button type="reset" class="btn btn-danger">RESET</button>
        </form>
    <?php endforeach;?>
</div>