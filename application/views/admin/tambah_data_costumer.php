<div class="main-content">
    <section class="section">
        
        <div class="section-header">
           <h1>Data Costumer</h1>
        </div>
    </section>

    <form action="<?= base_url('admin/data_costumer/tambah_data_costumer_aksi_nana')?>" method="post">
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control">
            
            <?= form_error('nama','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
        </div>

        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control">
            
            <?= form_error('username','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
        </div>

        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" name="alamat" class="form-control">
            
            <?= form_error('alamat','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
        </div>

        <div class="form-group">
            <label for="">Gender</label>
           <select name="gender" id="" class="form-control">
               <option value="">---Pilih Gender---</option>
               <option value="laki-laki">Laki-Laki</option>
               <option value="perempuan">Perempuan</option>
           </select>
            
            <?= form_error('gender','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
        </div>

        <div class="form-group">
            <label for="">No.Telepon</label>
            <input type="number" name="no_telepon" class="form-control">
            
            <?= form_error('no_telepon','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
        </div>

        <div class="form-group">
            <label for="">No.KTP</label>
            <input type="number" name="no_ktp" class="form-control">
            
            <?= form_error('no_ktp','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
        </div>

        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control">
            
            <?= form_error('password','<div class="text-small text-danger ml-2 mt-2">','</div>')?>
        </div>

        <button type="submit" class="btn btn-primary">SIMPAN</button>
        <button type="reset" class="btn btn-danger">RESET</button>
    </form>
</div>