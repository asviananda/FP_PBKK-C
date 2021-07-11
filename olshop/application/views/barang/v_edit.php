<div class="col-md-12">
    <!-- general form elements disabled -->
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Edit Product</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body"></div>
        <?php 
        echo validation_errors('<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-ban"></i>', '</h5> </div>');

        if(isset($error_upload))
        {
            echo '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-ban"></i>' . $error_upload . '</h5> </div>';
        }
        echo form_open_multipart('barang/edit/'.$barang->id_barang) ?>
        <div class="form-group">
            <label>Product Name</label>
            <input margin="8px 0" name="nama_barang" class="form-control" placeholder="Enter Product's Name" value="<?= $barang->nama_barang ?>">
        </div>
        <div class="row">
        <div class="col-md-6">
                <div class="form-group">
                <label>Artist</label>
                <select margin="8px 0" name="id_artis" class="form-control">
                    <option value="<?= $barang->id_artis ?>"><?= $barang->nama_artis ?></option>
                    <?php foreach ($artis as $key => $value) { ?>
                        <option value="<?= $value->id_artis ?>"><?= $value->nama_artis ?></option>

                    <?php } ?>
                </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <label>Category</label>
                <select margin="8px 0" name="id_kategori" class="form-control">
                    <option value="<?= $barang->id_kategori ?>"><?= $barang->nama_kategori ?></option>
                    <?php foreach ($kategori as $key => $value) { ?>
                        <option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>

                    <?php } ?>
                </select>
                </div>
            </div>
        </div>
        <div class="col-md-4">
                <div class="form-group">
                <label>Price</label>
                <input margin="8px 0" name="harga" class="form-control" placeholder="Enter Price" value="<?= $barang->harga ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                <label>Weight</label>
                <input margin="8px 0" name="berat" class="form-control" placeholder="Weight(g)" value="<?= $barang->berat ?>">
                </div>
            </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="deskripsi" class="form-control" cols="30" rows="5" placeholder="Enter Description"><?= $barang->deskripsi ?></textarea>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Replace Image</label>
                    <input type="file" name="gambar" id="preview_gambar" class="form-control">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <img height="300px" id="gambar_load" width="300px" src="<?= base_url('assets/gambar/'.$barang->gambar) ?>" alt="">
                </div>
            </div>
        </div>
        <div class="form-group">
           <button type="submit" class="btn btn-success">Add</button>
           <a  class="btn btn-primary href="<?= base_url('barang') ?>">Back</a>
        </div>
        <?php echo form_close() ?>
    </div>
</div>

<script>
    function bacaGambar(input) 
    {
        if (input.files && input.files[0])
        {
            var reader = new FileReader();
            reader.onload = function(e)
            {
                $('#gambar_load').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#preview_gambar").change(function()
    {
        bacaGambar(this);
    });
</script>
