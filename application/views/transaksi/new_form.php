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
            <div class="">
                <a href="<?php echo site_url('transaksi') ?>"><i class="fa fa-arrow-left"></i> Back</a>
            </div>


        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="white-box">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <?php if ($this->session->flashdata('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>
                            <form action="<?php base_url('transaksi/add') ?>" method="post" enctype="multipart/form-data">





                                <div class="form-group">
                                    <label for="tanggal_transaksi">tanggal_transaksi*</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input type="text" class="form-control mydatepicker <?php echo form_error('tanggal_transaksi') ? 'is-invalid' : '' ?>" name="tanggal_transaksi" placeholder="mm/dd/yyyy"> <span class="input-group-addon"><i class="icon-calender"></i></span>
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tanggal_transaksi') ?>
                                    </div>
                                </div>
                                <input class="form-control <?php echo form_error('no_transaksi') ? 'is-invalid' : '' ?>" type="hidden" name="no_transaksi" placeholder="Nomor Transaksi" value="<?= $hasil_1, $hasil_2, $hasil_3, $hasil_4, $hasil_5, $hasil_6, $hasil_7, $hasil_8, $hasil_9, $hasil_10; ?>" />
                                <div class="form-group">
                                    <label for="qty">Quantity</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input value="" class="form-control <?php echo form_error('qty') ? 'is-invalid' : '' ?>" type="number" name="qty" placeholder="Nomor Transaksi" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('qty') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="supplier">Nama Barang</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <select name="kode_mbarang" id="kode_mbarang" class="form-control">
                                            <option value="">Select Nama barang</option>
                                            <?php foreach ($mbarang as $mb) : ?>
                                                <option value="<?php echo $mb->kode_mbarang ?>"><?php echo $mb->nama ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="supplier">Supplier</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <select name="kode_supplier" id="kode_supplier" class="form-control">
                                            <option value="">Select Supplier</option>
                                            <?php foreach ($supplier as $sp) : ?>
                                                <option value="<?php echo $sp->kode_supplier ?>"><?php echo $sp->nama_supplier ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="status">status</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('status') ? 'is-invalid' : '' ?>" type="text" name="status" placeholder="Status" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('status') ?>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="btn" value="Save">Submit</button>
                                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>