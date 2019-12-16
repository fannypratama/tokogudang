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
                            <li><a href="<?php echo site_url('dbarang') ?>">Data barang</a></li>
                            <li class="active">Add Data Barang</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

      <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><a href="<?php echo site_url('dbarang') ?>"><i class="fa fa-arrow-left"></i> Back </a> 
                                <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                            <?php if ($this->session->flashdata('success')) : ?>
                                <div class="alert alert-success" role="alert">

                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>
                            <form action="<?php base_url('kategori/add') ?>" method="post" enctype="multipart/form-data">

                                <input class="form-control <?php echo form_error('no_transaksi') ? 'is-invalid' : '' ?>" type="hidden" name="no_transaksi" placeholder="Nomor Transaksi" value="<?= $hasil_1, $hasil_2, $hasil_3, $hasil_4, $hasil_5, $hasil_6, $hasil_7, $hasil_8, $hasil_9, $hasil_10; ?>" />    
                                <div class="form-group">         
                                    <label for="supplier">Kode    Master Barang</label>
                                    <div class="input-group">  
                                        <div class="input-group-addon"><i class="ti -user"></i></div>
                                        <select name="kode_mbarang" id="kode_mbara ng" class="form-control">
                                            <option value="">Select Kode master b arang</option>
                                            <?php foreach ($mbarang as $mb) : ?> 
                                                <option value="<?php echo $mb->kode_mbarang ?>"><?php echo $mb-> kode_mbarang ?></option>
                                             <?php endforeach; ?>
                                        < /select>
                                    </di v>
                                </div>  
                                <div class="form-group"> 
                                    <label for="supplier">Kode  Supplier</label>
                                    <div class="input-group"> 
                                        <div class="input-group-addon"><i class="ti- user"></i></div>
                                        <select name="kode_supplier" id="kode_suppl ier" class="form-control">
                                            <option value="">Select Supplier</opti on>
                                            <?php foreach ($supplier as $sp) : ?> 
                                                <option value="<?php echo $sp->kode_supplier ?>"><?php echo $sp-> kode_supplier ?></option>
                                             <?php endforeach; ?>
                                         </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('stok') ? 'is-invalid' : '' ?>" type="number" name="stok" placeholder="Stok" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('stok') ?>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="status">status</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <select name="status" id="kode_supplier" class="form-control">
                                            <option value="">Select Status</option>

                                            <option value="ADA">ADA</option>
                                            <option value="KOSONG">KOSONG</option>

                                        </select>
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