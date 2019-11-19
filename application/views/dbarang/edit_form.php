<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="">
                <a href="<?php echo site_url('kategori') ?>"><i class="fa fa-arrow-left"></i> Back</a>
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


                            <form action="<?php base_url('kategori/edit') ?>" method="post" enctype="multipart/form-data">

                                <input type="hidden" name="id" value="<?php echo $kategori->id_kategori ?>" />
                                <input type="hidden" name="kode_kategori" value="<?php echo $kategori->kode_kategori ?>" />
                                <div class="form-group">
                                    <label for="nama_kategori">Nama Kategori*</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('nama_kategori') ? 'is-invalid' : '' ?>" type="text" name="nama_kategori" placeholder="Nama Kategori" value="<?php echo $kategori->nama_kategori ?>" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_kategori') ?>
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