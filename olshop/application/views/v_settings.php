<div class="col-md-12">
    <!-- general form elements disabled -->
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Settings</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">    
        
        <?php echo form_open_multipart ('barang/add') ?>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Province</label>
                    <select name="provinsi" class="form-control"></select>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>City</label>
                    <select name="kota" class="form-control"></select>
                </div>
            </div>
        </div>

        <?php echo form_close() ?>

        
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $.ajax({
            type="POST",
            url="<?= base_url('rajaongkir/provinsi') ?>",
            success: function(hasil_provinsi) {
                //console.log(hasil_provinsi);
                $("select[name=provinsi]").html(hasil_provinsi);
            }
        });
    });
</script>