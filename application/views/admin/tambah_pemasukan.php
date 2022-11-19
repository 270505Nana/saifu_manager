<div class="main-content">
       <section class="section">   
              
              <div class="section-header">
              <h1>Tambah Pemasukan</h1>
              </div>
       </section>

       <!-- Nama pelanggan -->
       <div class="form-group">
              <label for="">Nama pelanggan</label>
              <input type="text" name="nama_pelanggan" class="form-control">
       </div>
       
       <!-- Nama makanan -->
       <div class="form-group">
              <label for="">Nama makanan</label>
              <input type="text" name="nama_barang" class="form-control">
       </div>

       <!-- Kategori makanan -->
       <div class="form-group">
              <label for="">Kategori makanan</label>
              <select name="kategori_pengeluaran" id="" class="form-control">
                     <option value="">---Pilih kategori---</option>
                     <option value="cookies">Cookies</option>
                     <option value="roti_kering">Roti kering</option>
                     <option value="cake">Cake</option>
                     <option value="roti_manis">Roti Manis</option>
              </select>
              
       </div>

       <!-- Tanggal pembelian -->
       <div class="form-group">
              <label for="">Tanggal pembelian</label>
              <input type="date" name="tanggal_pembelian" class="form-control">
       </div>

       <!-- Harga satuan -->
       <div class="form-group">
              <label for="">Harga satuan</label>
              <input type="number" name="harga_satuan" class="form-control">
       </div>
              
       <!-- Jumlah makanan -->
       <div class="form-group">
              <label for="">Jumlah makanan</label>
              <input type="number" name="jumlah_makanan" class="form-control">
       </div>
              
       <!-- Harga total -->
       <div class="form-group">
              <label for="">Harga Total</label>
              <input type="number" name="harga_total" class="form-control">
       </div>

       <button type="submit" class="btn btn-primary mt-3">SIMPAN</button>
</div>
