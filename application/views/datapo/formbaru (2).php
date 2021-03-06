<?php
function acakhuruf($panjang)
{
    $karakter = '0123456789';

    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
        $pos = rand(0, strlen($karakter) - 1);
        $string .= $karakter{
            $pos};
    }
    return $string;
}

$hasil_1 = acakhuruf(1);
$hasil_3 = acakhuruf(1);
$hasil_5 = acakhuruf(1);
$hasil_7 = acakhuruf(1);
$hasil_9 = acakhuruf(1);

function acakangka($panjang)
{
    $karakter = 'abcdefghaijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
        $pos = rand(0, strlen($karakter) - 1);
        $string .= $karakter{
            $pos};
    }
    return $string;
}

$hasil_2 = acakangka(1);
$hasil_4 = acakangka(1);
$hasil_6 = acakangka(1);
$hasil_8 = acakangka(1);
$hasil_10 = acakangka(1);

?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('datapo') ?>">Data Po</a></li>
                            <li class="active">Add Data Po</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
         <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><a href="<?php echo site_url('datapo') ?>"><i class="fa fa-arrow-left"></i> Back </a> 
                                <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">


<br>
        <div class="row">
                        <div class="col-sm-12 ">
                            <?php if ($this->session->flashdata('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>
                            <form action="<?php echo base_url('datapo/add_po') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">tanngal Transaksi</label>
                                    <div class="col-sm-7">    
                                        <div class="input-group">    
                                            <input type="text" class="form-control mydatepicker <?php echo form_error('tanggal_transaksi') ? 'is-invalid' : '' ?>" name="tanggal_transaksi" placeholder="mm/dd/yyyy"> <span class="input-group-addon"><i class="icon-calender"></i></span>
                                    </div>
                                </div>
                            </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">No Transaksi</label>
                                    <div class="col-sm-7">
                                    <select name="no_transaksi" id="nama_kategori" class="form-control">
                                        <option value="">Select Nomor</option>
                                        <?php foreach ($transaksi as $ts) : ?>
                                            <option value="<?php echo $ts->no_transaksi ?>">
                                                <?php echo $ts->no_transaksi ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Tujuan</label>
                                    <div class="col-sm-7">
                                            <input value="" class="form-control <?php echo form_error('tujuan') ? 'is-invalid' : '' ?>" type="text" name="tujuan" placeholder="tujuan" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tujuan') ?>
                                    </div>
                                </div>

                                    
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Alamat</label>
                                    <div class="col-sm-7">
                                            <input value="" class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" placeholder="alamat" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('alamat') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">No po</label>
                                    <div class="col-sm-7">
                               <input class="form-control <?php echo form_error('no_po') ? 'is-invalid' : '' ?>" type="text" name="no_po" placeholder="no_po" value="<?= $hasil_1, $hasil_2, $hasil_3, $hasil_4, $hasil_5, $hasil_6, $hasil_7, $hasil_8, $hasil_9, $hasil_10; ?>" />
                           </div>
                       </div>
                            	 <div class="form-group row ">
                                    <label class="col-sm-3 control-label">Detail</label>
                                    <div class="col-sm-7">
                                 <div data-role="dynamic-fields">
                <div class="form-inline">
                    <div class="form-group row">
                        <div class="col-sm-11">
                        <label class="sr-only" for="field-value">Item</label>
                        <input type="text" name='item[]' class="form-control" id="field-value" placeholder="Item">
                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-11">
                        <label class="sr-only" for="field-value">Qty</label>
                        <input type="number" name='qty[]' class="form-control" id="field-value" placeholder="Qty">
                    </div>
                </div>

                    <div class="form-group row">
                        <div class="col-sm-11">
                        <label class="sr-only" for="field-value">Satuan</label>
                        <input type="text" name='satuan[]' class="form-control" id="field-value" placeholder="Satuan">
                    </div>
                </div>
                    <div class="form-group row">
                        <div class="col-sm-11">
                    <button class="btn btn-danger" data-role="remove">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                </div>
            </div>
                    <div class="form-group row">
                    <div class="col-sm-11">    
                    <button class="btn btn-primary" data-role="add">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                </div>
            </div>
                </div>  <!-- /div.form-inline -->
            </div>
        </div>
    </div>

                                   <div class="form-group ">
                <div class="col-md-3 "></div>
              <div class="col-md-4">
                <div class="login-horizental cancel-wp pull-left">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="btn" value="Save">Submit</button>

                                <a class="btn btn-inverse waves-effect waves-light" href="<?php echo site_url('administrator/datapo') ?>"> Cancel</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
    $(function() {
    // Remove button click
    $(document).on(
        'click',
        '[data-role="dynamic-fields"] > .form-inline [data-role="remove"]',
        function(e) {
            e.preventDefault();
            $(this).closest('.form-inline').remove();
        }
    );
    // Add button click
    $(document).on(
        'click',
        '[data-role="dynamic-fields"] > .form-inline [data-role="add"]',
        function(e) {
            e.preventDefault();
            var container = $(this).closest('[data-role="dynamic-fields"]');
            new_field_group = container.children().filter('.form-inline:first-child').clone();
            new_field_group.find('input').each(function(){
                $(this).val('');
            });
            container.append(new_field_group);
        }
    );
});

    
</script>