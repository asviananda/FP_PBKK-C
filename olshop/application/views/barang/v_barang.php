<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Products</h3>

                <div class="card-tools">
                  <a href="<?= base_url('barang/add') ?>" type="button" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>
                  Add
                  </a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php
              if ($this->session->flashdata('pesan'))
              {
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>';
                echo $this->session->flashdata('pesan');
                echo '</h5></div>';
              }
              ?>
                <table class="table table-bordered" id="example1">
                    <thead class="text-center">
                        <tr>
                            <th>No.</th>
                            <th>Artist</th>
                            <th>Item</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    <?php $no = 1;
                     foreach($barang as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_artis ?></td>
                            <td>
                              <?= $value->nama_barang ?><br>
                              Weight : <?= $value->berat ?>gram
                            </td>
                            <td><?= $value->nama_kategori ?></td>
                            <td>Rp <?= number_format($value->harga,0) ?></td>
                            <td><?= $value->deskripsi ?></td>
                            <td><img width="150px" src="<?= base_url('assets/gambar/'.$value->gambar) ?>" alt="butter cd.jpg"></td>
                            <td>
                                <a href="<?= base_url('barang/edit/'.$value->id_barang) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <button data-toggle="modal" data-target="#delete<?= $value->id_barang ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>


<!--modal-delete-user-->
<?php foreach($barang as $key => $value) { ?>
      <div class="modal fade" id="delete<?= $value->id_barang ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title">Delete <?= $value->nama_barang ?></h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h5>Are You Sure?</h5>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="<?= base_url('barang/delete/'.$value->id_barang) ?>" class="btn btn-primary">Delete</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<?php } ?>

  