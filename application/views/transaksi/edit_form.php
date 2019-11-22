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


                            <form action="<?php base_url('transaksi/edit') ?>" method="post" enctype="multipart/form-data">

                                <input type="hidden" name="id" value="<?php echo $ts->id_ts ?>" />
                                <input type="hidden" name="nama_barang" value="<?php echo $ts->nama_barang ?>" />
                                <div class="form-group">
                                    <label for="nama">Nama Barang</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('nama_barang') ? 'is-invalid' : '' ?>" type="text" name="nama_barang" placeholder="Nama Barang" value="<?php echo $ts->nama_barang ?>" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nilai"></label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('nilai') ? 'is-invalid' : '' ?>" type="text" name="nilai" placeholder="nilai" value="<?php echo $ts->nilai ?>" />
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