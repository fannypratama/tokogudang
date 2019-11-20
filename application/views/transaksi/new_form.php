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
            <div class="col-lg-12">
                <div class="white-box">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <?php if ($this->session->flashdata('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>
                            <form action="<?php base_url('supplier/add') ?>" method="post" enctype="multipart/form-data">
                                <input class="form-control <?php echo form_error('kode_supplier') ? 'is-invalid' : '' ?>" type="hidden" name="kode_supplier" placeholder="Kode Supplier" value="<?= $hasil_1, $hasil_2, $hasil_3, $hasil_4, $hasil_5, $hasil_6, $hasil_7, $hasil_8, $hasil_9, $hasil_10; ?>" />

                                <div class="form-group">
                                    <label for="nama_barang">Nama Barang</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('nama_barang') ? 'is-invalid' : '' ?>" type="text" name="nama_barang" placeholder="Nama Barang" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_barang') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nama">Nilai System</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('nilai') ? 'is-invalid' : '' ?>" type="number" name="nilai" placeholder="Nilai" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nilai') ?>
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
</div>
</div>
</div>
</div>
</div>
</div>
</div>