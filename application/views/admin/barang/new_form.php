<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="">
                <a href="<?php echo site_url('admin/barangmasuk') ?>"><i class="fa fa-arrow-left"></i> Back</a>
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
                            <form action="<?php base_url('admin/barangmasuk/add') ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="tanggal">Tanggal*</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('tanggal') ? 'is-invalid' : '' ?>" type="date" name="tanggal" placeholder="Tanggal" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tanggal') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="supplier">Supplier*</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('supplier') ? 'is-invalid' : '' ?>" type="text" name="supplier" placeholder="Supplier" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('supplier') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lokasi">Lokasi*</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('lokasi') ? 'is-invalid' : '' ?>" type="text" name="lokasi" placeholder="Lokasi" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('lokasi') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kode_barang">Kode Barang*</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('kode_barang') ? 'is-invalid' : '' ?>" type="number" name="kode_barang" placeholder="Kode Barang" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('kode_barang') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama_barang">Nama Barang*</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('nama_barang') ? 'is-invalid' : '' ?>" type="text" name="nama_barang" placeholder="Nama Barang" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_barang') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="satuan">Satuan*</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('satuan') ? 'is-invalid' : '' ?>" type="text" name="satuan" placeholder="Satuan" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('Satuan') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="jumlah">Jumlah*</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('jumlah') ? 'is-invalid' : '' ?>" type="number" name="jumlah" min="0" placeholder="Jumlah" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('jumlah') ?>
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