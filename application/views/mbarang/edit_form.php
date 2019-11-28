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


                            <form action="<?php base_url('mbarang/edit') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

                                <input type="hidden" name="id" value="<?php echo $mbarang->id_mbarang ?>" />
                                <input type="hidden" name="kode_mbarang" value="<?php echo $mbarang->kode_mbarang ?>" />
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Kode Barang</label>
                                    <div class="col-sm-7">        <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Nama Barang" value="<?php echo $mbarang->nama ?>" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Satuan</label>
                                    <div class="col-sm-7">        <input class="form-control <?php echo form_error('satuan') ? 'is-invalid' : '' ?>" type="text" name="satuan" placeholder="Satuan Barang" value="<?php echo $mbarang->satuan ?>" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('satuan') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label col-form-label">Uraian</label>
                                    <div class="col-sm-7">
                                        <input class="form-control <?php echo form_error('uraian') ? 'is-invalid' : '' ?>" type="text" name="uraian" placeholder="Uraian Barang" value="<?php echo $mbarang->uraian ?>" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('uraian') ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-3 control-label col-form-label">Kategori</label>
                                    <div class="col-sm-7">
                                    <select name="nama_kategori" id="nama_kategori" class="form-control">
                                        <option value="<?php echo $mbarang->nama_kategori; ?>"><?php echo $this->db->get_where('kategori', array('kode_kategori' => $mbarang->nama_kategori))->row()->nama_kategori; ?></option>
                                        <?php foreach ($kat as $tampilKategori) : ?>
                                            <option value="<?= $tampilKategori->kode_kategori ?>">
                                                <?= $tampilKategori->nama_kategori ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                               <div class="form-group row">
                                    <label for="inputPassword4" class="col-sm-3 control-label col-form-label">Gambar Barang</label>
                                    <div class="col-sm-7">
                                       <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo base_url(''); ?>upload/mbarang/<?php echo $mbarang->foto; ?>" /> </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('foto') ?>
                                    </div>
                                    </div>

                                <input class="form-control-file <?php echo form_error('old_foto') ? 'is-invalid' : '' ?>" type="hidden" name="old_foto" value="<?php echo $mbarang->foto ?>" />


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