<div class="main-content">
    <section class="section">
        
        <div class="section-header">
           <h1>Detail Data Mobil</h1>
        </div>
    </section>

    <?php foreach ($detail as $dt ) : ?>
        <!-- bootstrap -->
        <div class="card">
            <div class="card-body">
                <!-- tampilan dibagi dua -->
                <div class="row">
                    <div class="col-md-5">
                        <!-- ada dua col-md ga boleh lebih dari 12 -->
                        <img  style="width:100%"  src="<?= base_url(). 'assets/upload/'.$dt->gambar ?>" alt="">
                    </div>

                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <td class="mr-5">Tipe Mobil : </td>
                                <td>
                                <?php
                                if ($dt->kode_type == "SDN"){echo "Sedan";}
                                elseif($dt->kode_type == "HTB"){echo "Hatchback";}
                                elseif($dt->kode_type == "MPV"){echo "Multi Purpose Vechile";}
                                else{echo "<span class='text-danger'>Type Mobil Belum Terdaftar!</span>";}?>
                                </td>
                            </tr>

                            <tr>
                                <td>Merk : </td>
                                <td><?= $dt->merk?></td>
                            </tr>

                            <tr>
                                <td>No Plat : </td>
                                <td><?= $dt->no_plat?></td>
                            </tr>

                            <tr>
                                <td>Warna : </td>
                                <td><?= $dt->warna?></td>
                            </tr>

                            <tr>
                                <td>Tahun : </td>
                                <td><?= $dt->tahun?></td>
                            </tr>

                            <tr>
                                <td>Status : </td>
                                <td><?php
                                if($dt->status == "0"){echo "<span class='badge badge-danger'>Tidak Tersedia</span>";}
                                else{echo "<span class='badge badge-primary'>Tersedia</span>";}?></td>
                            </tr>
                        </table>
                             <a href="<?= base_url('admin/data_mobil')?>" class="btn btn-sm btn-danger ml-4">KEMBALI</a>
                            <a href="<?= base_url('admin/data_mobil/update_mobil_nana/'.$dt->id_mobil)?>" class="btn btn-sm btn-success ">EDIT</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;?>
</div>
        