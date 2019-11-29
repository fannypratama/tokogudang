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
                            <li><a href="<?php echo site_url('refound') ?>">Refond</a></li>
                            <li class="active">refound</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
         <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><a href="<?php echo site_url('refound') ?>"><i class="fa fa-arrow-left"></i> Back </a> 
                                <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
<br>                            <?php if ($this->session->flashdata('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>
                            <form action="<?php base_url('transaksi/add') ?>" method="post" enctype="multipart/form-data"class="form-horizontal">





                            <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Tanggal Transaksi</label>
                                    <div class="col-sm-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control mydatepicker <?php echo form_error('tanggal_transaksi') ? 'is-invalid' : '' ?>" name="tanggal_transaksi" placeholder="mm/dd/yyyy"> <span class="input-group-addon"><i class="icon-calender"></i></span>
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tanggal_transaksi') ?>
                                    </div>
                                </div>
                                </div>
                                
                                <input class="form-control <?php echo form_error('no_transaksi') ? 'is-invalid' : '' ?>" type="hidden" name="no_transaksi" placeholder="Nomor Transaksi" value="<?= $hasil_1, $hasil_2, $hasil_3, $hasil_4, $hasil_5, $hasil_6, $hasil_7, $hasil_8, $hasil_9, $hasil_10; ?>" />
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Quantity</label>
                                    <div class="col-sm-7">
                                        <input value="" class="form-control <?php echo form_error('qty') ? 'is-invalid' : '' ?>" type="number" name="qty" placeholder="Qty" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('qty') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">No Transaksi</label>
                                    <div class="col-sm-7">
                                            <input value="" class="form-control <?php echo form_error('qty') ? 'is-invalid' : '' ?>" type="text" name="no_transaksi" placeholder="Nomor Transaksi" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('qty') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Nama Barang</label>
                                    <div class="col-sm-7">
                                            <select name="kode_mbarang" id="kode_mbarang" class="form-control">
                                            <option value="">Select Nama barang</option>
                                            <?php foreach ($mbarang as $mb) : ?>
                                                <option value="<?php echo $mb->kode_mbarang ?>"><?php echo $mb->nama ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Supplier</label>
                                    <div class="col-sm-7">
                                            <select name="kode_supplier" id="kode_supplier" class="form-control">
                                            <option value="">Select Supplier</option>
                                            <?php foreach ($supplier as $sp) : ?>
                                                <option value="<?php echo $sp->kode_supplier ?>"><?php echo $sp->nama_supplier ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Status</label>

                                    <div class="col-sm-7">
                                            <input class="form-control <?php echo form_error('status') ? 'is-invalid' : '' ?>" type="text" name="status" placeholder="Status" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('status') ?>
                                    </div>
                                </div>

                                <div class="form-group m-b-0">
                                    <div class="offset-sm-3 col-sm-7">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="btn" value="Save">Submit</button>
                                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>