<div class="main-content">
       <section class="section">
              
              <div class="section-header">
              <h1>Rekap data pengeluaran</h1>
              </div>
       </section>

       <a href="<?= base_url('admin/pengeluaran/cetak_pengeluaran')?>" target = "_blank" class="btn btn-primary ml-2 mb-2"><i class="fas fa-print mr-2"></i>Cetak Rekap Data</a>

              <div class="card" style="margin-top: 35px;">
                     <div class="card-header">
                            Rekap data pengeluaran
                     </div>
                     <div class="card-body">
                            <table class="table table-bordered table-striped">
                                   <tr>
                                          <th>No</th>
                                          <th>Nama Barang</th>
                                          <th>Kategori pengeluaran</th>
                                          <th>Tanggal pembelian</th>
                                          <th>Harga satuan</th>
                                          <th>Jumlah barang</th>
                                          <th>Harga total</th>
                                          <th>aksi</th>

                                   </tr>

                                
                                   <tr>
                                          <td>1</td>
                                          <td>Terigu cakra</td>
                                          <td>Bahan kering</td>
                                          <td>12-6-2022</td>
                                          <td>Rp.10,000</td>
                                          <td>5</td>
                                          <td>Rp.50,000</td>
                                          <td>
                                                 <a href="<?= base_url('')?>" class="btn btn-danger ml-2 mt-2">Hapus</a>  
                                          </td>
                                   </tr>
                                   <tr>
                                          <td>2</td>
                                          <td>Terigu segitiga</td>
                                          <td>Bahan kering</td>
                                          <td>12-6-2022</td>
                                          <td>Rp.8,000</td>
                                          <td>5</td>
                                          <td>Rp.40,000</td>
                                          <td>
                                                 <a href="<?= base_url('')?>" class="btn btn-danger ml-2 mt-2">Hapus</a>  
                                          </td>
                                   </tr>
                                   <tr>
                                          <td>3</td>
                                          <td>Pengaduk Mixer</td>
                                          <td>Alat masak</td>
                                          <td>20-6-2022</td>
                                          <td>Rp.150,000</td>
                                          <td>2</td>
                                          <td>Rp.300,000</td>
                                          <td>
                                                 <a href="<?= base_url('')?>" class="btn btn-danger ml-2 mt-2">Hapus</a>  
                                          </td>
                                   </tr>
                            </table>
                     </div>
              </div>
</div>  