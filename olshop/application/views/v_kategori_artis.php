<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="<?= base_url() ?>assets/slider/hai.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?= base_url() ?>assets/slider/tobeyi.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?= base_url() ?>assets/slider/gukguk.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
</div>



<div class="card card-solid">
    <div class="card-body pb-0">
      <div class="row d-flex align-items-stretch">
      
      <?php foreach ($barang as $key => $value) { ?>
      <div class="col-12 col-sm-4 col-md-4">
      <?php echo form_open('belanja/add');
      echo form_hidden('id', $value->id_barang);
      echo form_hidden('qty', 1);
      echo form_hidden('price', $value->harga);
      echo form_hidden('name', $value->nama_barang);
      echo form_hidden('redirect_page', str_replace('index.php/','',current_url()));
      ?>
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                <h2 class="lead"><b><?= $value->nama_barang ?></b></h2>
                <p class="text-muted text-sm"><b>Artist: </b><?= $value->nama_artis ?></p>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                  
                    <div class="col-12 text-center">
                      <img src="<?= base_url('assets/gambar/'. $value->gambar) ?>" alt="" width="180px" height="120px" class="img-square img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="text-left">
                      <h5><span class="badge bg-primary">Rp <?= number_format($value->harga, 0) ?></span></h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                      <i class="fas fa-eye"></i>
                    </a>
                    <button type="submit" class="btn btn-sm btn-primary">
                      <i class="fas fa-cart-plus">  Add to Cart</i> 
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>

      </div>
    </div>
</div>