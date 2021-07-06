<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Products</h3>

                <div class="card-tools">
                  <button data-toggle="modal" data-target="#add" type="button" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>
                  Add
                  </button>
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
                            <th>Item</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    <?php $no = 1;
                     foreach($barang as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_barang ?></td>
                            <td><?= $value->nama_kategori ?></td>
                            <td>Rp <?= number_format($value->harga,0) ?></td>
                            <td><img width="150px" src="<?= base_url('assets/gambar/'.$value->gambar) ?>" alt="butter cd.jpg"></td>
                            <td>
                                <a href="<?= base_url('barang/edit/'.$value->id_barang) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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

          <!--modal-add-user-->
        <div class="modal fade" id="add">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Products</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('barang/add') ?>
                  <div class="form-group">
                    <label>Product Name</label>
                    <input name="nama_barang" class="form-control" placeholder="Product Name">
                  </div>

                  <div class="form-group">
                    <label>Category</label>
                    <input name="id_kategori" class="form-control" placeholder="Category">
                  </div>

                  <div class="form-group">
                    <label>Price</label>
                    <input name="harga" class="form-control" placeholder="Price">
                  </div>
              
                  <div class="form-group">
                    <label>Description</label>
                    <textarea name="deskripsi" class="form-control" rows="6" placeholder="Description"></textarea>
                  </div>

                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="gambar" class="form-control">
                  </div>
            </div>
            <div class="modal-footer justify-content-between form_group">
              <button type="submit" class="btn btn-primary">Save</button>
              <a href="<?= base_url('barang') ?>"></a>
            </div>
            <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>