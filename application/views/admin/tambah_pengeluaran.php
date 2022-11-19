<div class="main-content">
       <section class="section">
              
              <div class="section-header">
              <h1>Tambah Pengeluaran</h1>
              </div>
       </section>

       <!-- Nama barang -->
       <div class="form-group">
              <label for="">Nama barang</label>
              <input type="text" name="nama_barang" class="form-control">
       </div>

       <!-- Kategori pengeluaran -->
       <div class="form-group">
              <label for="">Kategori pengeluaran</label>
              <select name="kategori_pengeluaran" id="" class="form-control">
                     <option value="">---Pilih kategori pengeluaran---</option>
                     <option value="laki-laki">Bahan kering</option>
                     <option value="Bahan basah">Bahan basah</option>
                     <option value="Alat masak">Alat masak</option>
              </select>
       </div>

       <!-- tanggal pembelian -->
       <div class="form-group">
              <label for="">Tanggal pembelian</label>
              <input type="date" name="tanggal_pembelian" class="form-control">
       </div>

       <!-- Harga satuan -->
       <div class="form-group">
              <label for="">Harga satuan</label>
              <input type="number" name="harga_satuan" class="form-control">
       </div>
             
       <!-- Jumlah barang -->
       <div class="form-group">
              <label for="">Jumlah barang</label>
              <input type="number" name="jumlah_barang" class="form-control">
       </div>
              
       <!-- Harga total -->
       <div class="form-group">
              <label for="">Harga Total</label>
              <input type="number" name="harga_total" class="form-control">
       </div>   

       <!-- Catatan tambahan -->
       <div class="form-group">
              <label for="">Catatan tambahan</label>
              <textarea type="text" name="catatan_tambahan" class="form-control"></textarea>
       </div>

       <button type="submit" class="btn btn-primary mt-3">SIMPAN</button>
</div>