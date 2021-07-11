<div class="card card-solid">
    <div class="card-body pb-0">
        <div class="row">
        <div class="col-sm-12">
            <?php echo form_open('belanja/update'); ?>

            <table class="table" cellpadding="6" cellspacing="1" style="width:100%">

            <tr>
                    <th width="75px">Qty</th>
                    <th>Product Name</th>
                    <th style="text-align:right">Price</th>
                    <th style="text-align:right">Weight</th>
                    <th style="text-align:right">Sub-Total</th>
                    <th class="text-center">Action</th>
            </tr>

            <?php $i = 1; ?>

            <?php 
            $total_berat = 0;
            foreach ($this->cart->contents() as $items) { 
                $barang = $this->m_home->detail_barang($items['id']);
                $berat = $items['qty'] * $barang->berat;
                $total_berat = $total_berat  + $berat;
                ?>

                    <tr>
                            <td>
                                <?php echo form_input(array(
                                'name' => $i.
                                '[qty]', 
                                'value' => $items['qty'], 
                                'maxlength' => '3', 
                                'min' => '0',
                                'size' => '5', 
                                'type'=>'number', 
                                'class'=>'form-control')
                                ); ?>
                            </td>
                            <td><?php echo $items['name']; ?></td>
                            <td style="text-align:right">Rp.<?php echo number_format($items['price'],0); ?></td>
                            <td style="text-align:right"><?= $berat ?>gram</td>
                            <td style="text-align:right">Rp.<?php echo number_format($items['subtotal'],0); ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('belanja/delete/'.$items['rowid']) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                    </tr>

            <?php $i++; ?>

            <?php } ?>

            <tr>
                    <td></td>
                    <td class="right"><strong>Total :</strong></td>
                    <td></td>
                    <td class ="right"><strong><?php echo number_format($total_berat) ?>gram</strong></td></td>
                    <td></td>
                    <td class="left"><h5><strong>Rp.<?php echo number_format($this->cart->total(), 0); ?></strong></h5></td>
            </tr>
            

            </table>
                <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Update Cart</button>
                <a href="<?= base_url('belanja/clear') ?>" class="btn btn-danger" type="submit"><i class="fa fa-sync"></i> Clear Cart</a>
                <a href="#" class="btn btn-success" type="submit"><i class="fa fa-shopping-cart"></i> Check Out</a>
           <?php echo form_close() ?>
           <br>
        </div>
        </div>
    </div>
</div>