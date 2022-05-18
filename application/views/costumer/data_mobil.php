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
      <?php echo $this->session->flashdata('pesan')?>
        <div class="row">
        <?php foreach($mobil as $mb) :?>
          <div class="col-md-4">
            <div class="product-item">
              <img src="<?php echo base_url('assets/upload/'.$mb->gambar)?>" alt="">

              <div class="down-content">
                <h4><?php echo $mb->merk?></h4>
                <h4><?php echo $mb->no_plat?></h4>


                <a href="<?php echo base_url('costumer/data_mobil/detail_mobil_nana/'.$mb->id_mobil)?>" class="btn btn-warning ml-2 mt-2">Detail Mobil</a>           
                
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