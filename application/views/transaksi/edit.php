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


                            <form action="<?php base_url('transaksi/edit') ?>" method="post" enctype="multipart/form-data">

                                <input type="hidden" name="id" value="<?php echo $transaksi->id_transaksi ?>" />
                                <input type="hidden" name="date_create" value="<?php echo $transaksi->date_create ?>" />
                                <div class="form-group">
                                    <label for="tanggal_transaksi">tanggal_transaksi*</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input type="text" class="form-control mydatepicker <?php echo form_error('tanggal_transaksi') ? 'is-invalid' : '' ?>" name="tanggal_transaksi" placeholder="mm/dd/yyyy" value="<?php echo $transaksi->tanggal_transaksi ?>"> <span class="input-group-addon"><i class="icon-calender"></i></span>
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tanggal_transaksi') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="qty">No Transaksi</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input readonly class="form-control <?php echo form_error('qty') ? 'is-invalid' : '' ?>" type="text" name="no_transaksi" placeholder="NO transaksi" value="<?php echo $transaksi->no_transaksi ?>">
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('qty') ?>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="qty">Quantity</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('qty') ? 'is-invalid' : '' ?>" type="number" name="qty" placeholder="Quantity" value="<?php echo $transaksi->qty ?>">
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
                                    <label for="status">Status</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('qty') ? 'is-invalid' : '' ?>" type="text" name="status" placeholder="Status" value="<?php echo $transaksi->status ?>">
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('qty') ?>
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