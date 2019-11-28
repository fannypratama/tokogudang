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


                            <form action="<?php base_url('transaksi/edit') ?>" method="post" enctype="multipart/form-data"class="form-horizontal">

                                <input type="hidden" name="id" value="<?php echo $transaksi->id_transaksi ?>" />
                                <input type="hidden" name="date_create" value="<?php echo $transaksi->date_create ?>" />
                               <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Tanggal Transaksi</label>
                                    <div class="col-sm-7">
                                         <div class="input-group">
                                        <input type="text" class="form-control mydatepicker <?php echo form_error('tanggal_transaksi') ? 'is-invalid' : '' ?>" name="tanggal_transaksi" placeholder="mm/dd/yyyy" value="<?php echo $transaksi->tanggal_transaksi ?>"> <span class="input-group-addon"><i class="icon-calender"></i></span>
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tanggal_transaksi') ?>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Kode Transaksi</label>
                                    <div class="col-sm-7">       <input readonly class="form-control <?php echo form_error('qty') ? 'is-invalid' : '' ?>" type="text" name="no_transaksi" placeholder="NO transaksi" value="<?php echo $transaksi->no_transaksi ?>">
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('qty') ?>
                                    </div>
                                </div>


                               <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Quantity</label>
                                    <div class="col-sm-7">
                                        <input class="form-control <?php echo form_error('qty') ? 'is-invalid' : '' ?>" type="number" name="qty" placeholder="Quantity" value="<?php echo $transaksi->qty ?>">
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('qty') ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Nama Barang</label>
                                    <div class="col-sm-7">        <select name="kode_mbarang" id="kode_mbarang" class="form-control">
                                            <option value="">Select Nama barang</option>
                                            <?php foreach ($mbarang as $mb) : ?>
                                                <option value="<?php echo $mb->kode_mbarang ?>"><?php echo $mb->nama ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Supplier</label>
                                    <div class="col-sm-7">        <select name="kode_supplier" id="kode_supplier" class="form-control">
                                            <option value="">Select Supplier</option>
                                            <?php foreach ($supplier as $sp) : ?>
                                                <option value="<?php echo $sp->kode_supplier ?>"><?php echo $sp->nama_supplier ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Status</label>
                                    <div class="col-sm-7">        <input class="form-control <?php echo form_error('qty') ? 'is-invalid' : '' ?>" type="text" name="status" placeholder="Status" value="<?php echo $transaksi->status ?>">
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('qty') ?>
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