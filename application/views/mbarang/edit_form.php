<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="">
                <a href="<?php echo site_url('mbarang') ?>"><i class="fa fa-arrow-left"></i> Back</a>
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


                            <form action="<?php base_url('mbarang/edit') ?>" method="post" enctype="multipart/form-data">

                                <input type="hidden" name="id" value="<?php echo $mbarang->id_mbarang ?>" />
                                <input type="hidden" name="kode_mbarang" value="<?php echo $mbarang->kode_mbarang ?>" />
                                <div class="form-group">
                                    <label for="Nama Barang">Nama </label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Nama Barang" value="<?php echo $mbarang->nama ?>" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Satuan">Satuan</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('satuan') ? 'is-invalid' : '' ?>" type="text" name="satuan" placeholder="Satuan Barang" value="<?php echo $mbarang->satuan ?>" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('satuan') ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="uraian">Uraian</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control <?php echo form_error('uraian') ? 'is-invalid' : '' ?>" type="text" name="uraian" placeholder="Uraian Barang" value="<?php echo $mbarang->uraian ?>" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('uraian') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <select name="nama_kategori" id="nama_kategori" class="form-control">
                                        <option value="<?php echo $mbarang->nama_kategori; ?>"><?php echo $this->db->get_where('kategori', array('kode_kategori' => $mbarang->nama_kategori))->row()->nama_kategori; ?></option>
                                        <?php foreach ($kat as $tampilKategori) : ?>
                                            <option value="<?= $tampilKategori->kode_kategori ?>">
                                                <?= $tampilKategori->nama_kategori ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="foto">Photo</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="ti-user"></i></div>
                                        <input class="form-control-file <?php echo form_error('foto') ? 'is-invalid' : '' ?>" type="file" name="foto" />
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('foto') ?>
                                    </div>
                                </div>

                                <input class="form-control-file <?php echo form_error('old_foto') ? 'is-invalid' : '' ?>" type="hidden" name="old_foto" value="<?php echo $mbarang->foto ?>" />



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