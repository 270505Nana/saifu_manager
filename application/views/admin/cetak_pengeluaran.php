<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style type="text/css">
        body{
            font-family: Arial;
            color:black;
        }
    </style>
</head>
<body>
       <center><h2 style="mb-5">REKAP DATA PENGELUARAN</h2></center>
       <hr>
       <table>
            <tr>
                <td>Bulan</td>
                <td>:</td>
                <td>Juni</td>
                <!-- <td><?= $bulan?></td> -->
            </tr>
            <tr>
                <td>Tahun</td>
                <td>:</td>
                <td>2022</td>
                <!-- <td><?= $tahun ?></td> -->
            </tr>
        </table>

        <table class="table table-bordered table-striped mt-3">
              <tr>
                     <th  class="text-center">No</th>
                     <th  class="text-center">Nama Barang</th>
                     <th  class="text-center">Kategori pengeluaran</th>
                     <th  class="text-center">Tanggal pembelian</th>
                     <th  class="text-center">Harga satuan</th>
                     <th  class="text-center">Jumlah barang</th>
                     <th  class="text-center">Harga total</th>

              </tr>


              <tr>
                     <td>1</td>
                     <td>Terigu cakra</td>
                     <td>Bahan kering</td>
                     <td>12-6-2022</td>
                     <td>Rp.10,000</td>
                     <td>5</td>
                     <td>Rp.50,000</td>
              </tr>
              <tr>
                     <td>2</td>
                     <td>Terigu segitiga</td>
                     <td>Bahan kering</td>
                     <td>12-6-2022</td>
                     <td>Rp.8,000</td>
                     <td>5</td>
                     <td>Rp.40,000</td>
                     
              </tr>
              <tr>
                     <td>3</td>
                     <td>Pengaduk Mixer</td>
                     <td>Alat masak</td>
                     <td>20-6-2022</td>
                     <td>Rp.150,000</td>
                     <td>2</td>
                     <td>Rp.300,000</td>
              </tr>
        </table>

        <table width="100%">
            <tr>
                <td></td> <!-- left -->
                <td width="200px"> <!-- right -->
                    <!-- <p>Purwokerto, <?= date("d M Y")?><br>Finance</p> -->
                    <p>Nana, 27 Juni 2022</p>
                    <br>
                    <br>
                    <p>_____________________</p>
                </td>
            </tr>
        </table>
</body>
</html>

<script type="text/javascript">
    window.print()
</script>