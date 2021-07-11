<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Artist</h3>

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
                            <th>Artist</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    <?php $no = 1;
                     foreach($artis as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_artis ?></td>
                            <td>
                                <button data-toggle="modal" data-target="#edit<?= $value->id_artis ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                <button data-toggle="modal" data-target="#delete<?= $value->id_artis ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
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

                <!--modal-add-kategori-->
        <div class="modal fade" id="add">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Artist</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('artis/add') ?>
                  <div class="form-group">
                    <label>Artist</label>
                    <input type="text" name="nama_artis" class="form-control" placeholder="Artist" required>
                  </div>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <!--modal-edit-user-->
<?php foreach($artis as $key => $value) { ?>
      <div class="modal fade" id="edit<?= $value->id_artis ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Artist</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('artis/edit/'.$value->id_artis) ?>
                  <div class="form-group">
                    <label>Artist</label>
                    <input type="text" name="nama_artis" value="<?= $value->nama_artis ?>" class="form-control" placeholder="Artist" required>
                  </div>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<?php } ?>


<!--modal-delete-user-->
<?php foreach($artis as $key => $value) { ?>
      <div class="modal fade" id="delete<?= $value->id_artis ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title">Delete <?= $value->nama_artis ?></h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h5>Are You Sure?</h5>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="<?= base_url('artis/delete/'.$value->id_artis) ?>" class="btn btn-primary">Delete</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<?php } ?>