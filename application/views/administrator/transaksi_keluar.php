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
                    <li><a href="<?php echo site_url('transaksi') ?>">Transaksi</a></li>
                    <li class="active">Barang Keluar</a></li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="<?php echo site_url('transaksi') ?>"><i class="fa fa-arrow-left"></i> Back </a>
                    <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <br> <?php if ($this->session->flashdata('success')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php endif; ?>
                        <form action="<?= base_url('transaksi_keluar/add_pengganti') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
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


                            <div class="form-group row">
                                <label class="col-sm-3 control-label col-form-label">No Transaksi</label>
                                <div class="col-sm-7">
                                    <input readonly="" value="<?= $hasil_1, $hasil_2, $hasil_3, $hasil_4, $hasil_5, $hasil_6, $hasil_7, $hasil_8, $hasil_9, $hasil_10; ?>" class="form-control <?php echo form_error('no_transaksi') ? 'is-invalid' : '' ?>" type="text" name="no_transaksi" placeholder="Nomor Transaksi" />
                                </div>
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_transaksi') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-7">
                                    <input value="<?= $hasil_1, $hasil_2, $hasil_3, $hasil_4, $hasil_5, $hasil_6, $hasil_7, $hasil_8, $hasil_9, $hasil_10; ?>" class="form-control <?php echo form_error('no_transaksi') ? 'is-invalid' : '' ?>" type="hidden" name="kode_supplier" placeholder="kode_supplier" />
                                </div>
                                <div class="invalid-feedback">
                                    <?php echo form_error('kode_supplier') ?>
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Nama Barang</label>
                                    <div class="col-sm-7">
                                            <select name="kode_mbarang" id="kode_mbarang" class="form-control">
                                            <option value="">Select Nama barang</option>
                                            <?php foreach ($mbarang as $mb) : ?>
                                                <option value="<?php echo $mb->kode_mbarang ?>"><?php echo $mb->nama ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div> -->
                            <!--  <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Supplier</label>
                                    <div class="col-sm-7">
                                            <select name="kode_supplier" id="kode_supplier" class="form-control">
                                            <option value="">Select Supplier</option>
                                            <?php foreach ($supplier as $sp) : ?>
                                                <option value="<?php echo $sp->kode_supplier ?>"><?php echo $sp->nama_supplier ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div> -->

                            <div class="form-group row">
                                <!-- <label class="col-sm-3 control-label col-form-label">Status</label> -->
                                <div class="col-sm-7">
                                    <input class="form-control <?php echo form_error('status') ? 'is-invalid' : '' ?>" type="hidden" value="keluar" name="status" placeholder="Status" />
                                </div>
                                <div class="invalid-feedback">
                                    <?php echo form_error('status') ?>
                                </div>
                            </div>

                            <div class="form-group row ">
                                <label class="col-sm-3 control-label">Detail</label>
                                <div class="col-sm-7">
                                    <div data-role="dynamic-fields">
                                        <div class="form-inline">
                                            <div class="form-group ">
                                                <div class="col-sm-11">
                                                    <label class="sr-only" for="field-value">Item</label>
                                                    <select name='kode_mbarang[]' id="nama_kategori" class="form-control">
                                                        <option value="">Select Item</option>
                                                        <?php foreach ($mbarang as $mb) : ?>
                                                            <option value="<?php echo $mb->kode_mbarang ?>"><?php echo $mb->nama ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-9">
                                                    <label class="sr-only" for="field-value">Qty</label>
                                                    <input type="number" name='qty[]' class="form-control" id="field-value" placeholder="Qty">

                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('qty') ?>
                                                    </div>
                                                    <!-- <select name="item" id="nama_kategori" class="form-control">
                                        <option value="">QTY</option>
                                        <?php foreach ($transaksi as $ts) : ?>
                                            <option value="<?php echo $ts->qty ?>"><?php echo $ts->qty ?></option>
                                        <?php endforeach; ?>
                                    </select> -->

                                                </div>
                                            </div>

                                            <!-- <div class="form-group">
                        <div class="col-sm-11">
                        <label class="sr-only" for="field-value">Satuan</label>
                        <input type="text" name='satuan[]' class="form-control" id="field-value" placeholder="Satuan">
                    </div>
                </div> -->
                                            <div class="form-group">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-danger" data-role="remove">
                                                        <span class="glyphicon glyphicon-remove"></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-9">
                                                    <button class="btn btn-primary" data-role="add">
                                                        <span class="glyphicon glyphicon-plus"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div> <!-- /div.form-inline -->
                                    </div>
                                </div>
                            </div>

                            <div class="form-group m-b-0">
                                <div class="offset-sm-3 col-sm-7">
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="btn" value="Save">Submit</button>
                                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                        </form>


                    </div>

                    <!-- /.row -->


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