<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('transaksi') ?>">Transaksi</a></li>
                            <li class="active">Edit Transaksi</a></li>
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
<br>
                            <?php if ($this->session->flashdata('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>


                            <form action="<?php base_url('transaksi/edit') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                                <input type="hidden" name="id" value="<?php echo $ts->id_ts ?>" />
                                <input type="hidden" name="nama_barang" value="<?php echo $ts->nama_barang ?>" />
                               <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Nama Barang</label>
                                    <div class="col-sm-7">
                                        <input class="form-control <?php echo form_error('nama_barang') ? 'is-invalid' : '' ?>" type="text" name="nama_barang" placeholder="Nama Barang" value="<?php echo $ts->nama_barang ?>" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama') ?>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Nilai System</label>
                                    <div class="col-sm-7">
                                        <input class="form-control <?php echo form_error('nilai') ? 'is-invalid' : '' ?>" type="text" name="nilai" placeholder="nilai" value="<?php echo $ts->nilai ?>" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nilai') ?>
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
</div>

</div>