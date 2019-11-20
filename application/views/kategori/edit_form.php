<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('kategori') ?>">Kategori</a></li>
                            <li class="active">Edit Kategori</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                            <?php if ($this->session->flashdata('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>

                                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><a href="<?php echo site_url('kategori') ?>"><i class="fa fa-arrow-left"></i> Back</a></div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
        
                            <form action="<?php base_url('kategori/edit') ?>" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" >

                                <input type="hidden" name="id" value="<?php echo $kategori->id_kategori ?>" />
                                <input type="hidden" name="kode_kategori" value="<?php echo $kategori->kode_kategori ?>" />
                                <div class="form-group">
                                     <label class="control-label col-md-3">Nama Kategori</label>
                                                <div class="col-md-5">    
                                                    <input class="form-control <?php echo form_error('nama_kategori') ? 'is-invalid' : '' ?>" type="text" name="nama_kategori" placeholder="Nama Kategori" value="<?php echo $kategori->nama_kategori ?>" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_kategori') ?>
                                    </div>
                                    <br><br><br>
                <div class="col-md-3 "></div>
              <div class="col-md-4">
                <div class="login-horizental cancel-wp pull-left">
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