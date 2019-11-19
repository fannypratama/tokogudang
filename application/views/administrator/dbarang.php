<div id="page-wrapper">
    <div class="container-fluid">
        <!-- DataTables -->

        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title m-b-0"><?= $title; ?></h3>

                    <!-- <div class="card-header">
                        <a  href="<?php echo base_url('dbarang/add') ?>"><i class="fa fa-plus"></i> Add New</a>

                    </div> -->

                    <div class="table-responsive">
                        <table class="table table-striped" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID Data Barang</th>
                                    <th>Kode Master Barang</th>
                                    <th>Kode Supplier</th>
                                    <th>Nama Supplier</th>
                                    <th>Nama Barang</th>
                                    <th>Satuan</th>
                                    <th>Uraian</th>
                                    <th>Nama Kategori</th>


                                    <th>Stok</th>
                                    <th>Status</th>
                                    <th>Foto</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dbarang as $databarang) : ?>

                                    <tr>
                                        <td width="150">
                                            <?php echo $databarang->id_dbarang ?>
                                        </td>
                                        <td>
                                            <?php echo $databarang->kode_mbarang ?>
                                        </td>
                                        <td>
                                            <?php echo $databarang->kode_supplier ?>
                                        </td>

                                        <td>
                                            <?php echo $databarang->nama_supplier ?>
                                        </td>
                                        <td>
                                            <?php echo $databarang->nama ?>
                                        </td>
                                        <td>
                                            <?php echo $databarang->satuan ?>
                                        </td>
                                        <td>
                                            <?php echo $databarang->uraian ?>
                                        </td>
                                        <td>
                                            <?php echo $databarang->nama_kategori ?>
                                        </td>
                                        <td>
                                            <?php echo $databarang->stok ?>
                                        </td>
                                        <td>
                                            <?php echo $databarang->status ?>
                                        </td>

                                        <td>
                                            <!-- <img src="/application/upload/mbarang/images.jpg"> -->
                                            <img src="<?php echo base_url(''); ?>upload/mbarang/<?php echo $databarang->foto; ?>" width="64" />
                                        </td>


                                        <td>
                                            <a href="<?php echo base_url('dbarang/edit/' . $databarang->id_dbarang) ?>" class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('dbarang/delete/' . $databarang->id_dbarang) ?>')" href="#!" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
            </div>
        </div>
    </div>
</div>