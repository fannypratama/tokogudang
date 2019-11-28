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
                            <li><a href="<?php echo site_url('mbarang') ?>">Master Barang</a></li>
                            <li class="active">Add Master Barang</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>



      <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><a href="<?php echo site_url('mbarang') ?>"><i class="fa fa-arrow-left"></i> Back </a> 
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
                            <form action="<?= base_url('mbarang/add') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <input class="form-control <?php echo form_error('kode_mbarang') ? 'is-invalid' : '' ?>" type="hidden" name="kode_mbarang" placeholder="Kode Master Barang" value="<?= $hasil_1, $hasil_2, $hasil_3, $hasil_4, $hasil_5, $hasil_6, $hasil_7, $hasil_8, $hasil_9, $hasil_10; ?>" />

                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Nama Barang</label>
                                    <div class="col-sm-6">
                                        <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Nama Barang" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label">Satuan</label>
                                    <div class="col-sm-6">
                                        <input class="form-control <?php echo form_error('satuan') ? 'is-invalid' : '' ?>" type="text" name="satuan" placeholder="Satuan Barang" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('satuan') ?>
                                    </div>
                                </div>

                               <div class="form-group row">
                                    <label class="col-sm-3 control-label">Uraian</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control <?php echo form_error('uraian') ? 'is-invalid' : '' ?>" type="text" name="uraian" placeholder="uraian Barang"></textarea>

                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('uraian') ?>
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <label class="col-sm-3 control-label">Select Kategori</label>
                                    <div class="col-sm-6">
                                    <select name="nama_kategori" id="nama_kategori" class="form-control">
                                        <option value="">Select Kategori</option>
                                        <?php foreach ($kategori as $tampilKategori) : ?>
                                            <option value="<?php echo $tampilKategori->kode_kategori ?>">
                                                <?php echo $tampilKategori->nama_kategori ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                               <div class="form-group row">
                                                <label class="col-sm-3 control-label">Gambar</label>
                                    <div class="col-sm-6">
                                   <input type="file" id="foto" name="foto"  class="dropify" required="required">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('foto') ?>
                                    </div>
                                </div>
                            </div>


                                   <div class="form-group ">
                <div class="col-md-3 "></div>
              <div class="col-md-4">
                <div class="login-horizental cancel-wp pull-left">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="btn" value="Save">Submit</button>

                                <a class="btn btn-inverse waves-effect waves-light" href="<?php echo site_url('administrator/addmb') ?>"> Cancel</a>

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