 <!-- Page Content -->
 <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>CAR RENTAL</h4>
              <h2>List Data Mobil</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
      <?= $this->session->flashdata('pesan')?>
        <div class="row">
        <?php foreach($mobil as $mb) :?>
          <div class="col-md-4">
            <div class="product-item">
              <img src="<?= base_url('assets/upload/'.$mb->gambar)?>" alt="">

              <div class="down-content">

                <!-- YANG DITAMPILKAN DI DALAM CARD -->
                <h4><?= $mb->merk?></h4>
                <h4>Rp.<?= number_format($mb->harga,0,',','.')?> / Hari</h4>
               
                <ul class="car-info-list">
                    <li><?php 
                        if($mb->ac == "1"){
                          echo "<i class='fa fa-check-circle text-warning ml-2'></i>";
                        }else{
                            echo"<i class='fa fa-times-circle'></i>";
                        }
                               
                    ?>AC   |</li>
                    <li><?php 
                        if($mb->supir == "1"){
                          echo "<i class='fa fa-check-circle text-warning ml-2'></i>";
                        }else{
                            echo"<i class='fa fa-times-circle'></i>";
                        }
                               
                    ?>Supir   |</li>
                    <li><?php 
                        if($mb->mp3_player == "1"){
                          echo "<i class='fa fa-check-circle text-warning ml-2'></i>";
                        }else{
                            echo"<i class='fa fa-times-circle'></i>";
                        }
                               
                    ?>MP3 Player   |</li>
                    <li><?php 
                        if($mb->central_lock == "1"){
                          echo "<i class='fa fa-check-circle text-warning ml-2'></i>";
                        }else{
                            echo"<i class='fa fa-times-circle'></i>";
                        }
                               
                    ?>Central Lock   |</li>
                    <li>
                      
                    </li>
                    
                </ul>
                <a href="<?= base_url('costumer/data_mobil/detail_mobil_nana/'.$mb->id_mobil)?>" class="btn btn-warning ml-2 mt-2">Detail Mobil</a>           
                
                <?php
                if ($mb->status == "0") { 
                    echo "<button class='btn btn-danger ml-2 mt-2' disable>Telah di Sewa</button>";
                }else{
                    echo anchor('costumer/rental/tambah_rental'.$mb->id_mobil, 
                    '<button class="btn btn-success ml-2 mt-2">Rental</button>');
                }?>
              </div>
            </div>
          </div>
        <?php endforeach;?>
        </div>
      </div>
    </div>