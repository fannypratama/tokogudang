<div id="page-wrapper">
    <div class="container-fluid">
        <!-- DataTables -->

        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title m-b-0">Data Table</h3>

                    <div class="card-header">
                        <a href="<?php echo base_url('admin/barangmasuk/add') ?>"><i class="fa fa-plus"></i> Add New</a>

                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID Barang Masuk</th>
                                    <th>Tanggal</th>
                                    <th>Supplier</th>
                                    <th>Lokasi</th>
                                    <th>Kode_barang</th>
                                    <th>Nama_barang</th>
                                    <th>Satuan</th>
                                    <th>Jumlah</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($barang_masuk as $bm) : ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $bm->id_barang_masuk ?>
                                        </td>
                                        <td>
                                            <?php echo $bm->tanggal ?>
                                        </td>
                                        <td>
                                            <?php echo $bm->supplier ?>
                                        </td>
                                        <td>
                                            <?php echo $bm->lokasi ?>
                                        </td>
                                        <td>
                                            <?php echo $bm->kode_barang ?>
                                        </td>
                                        <td>
                                            <?php echo $bm->nama_barang ?>
                                        </td>
                                        <td>
                                            <?php echo $bm->satuan ?>
                                        </td>
                                        <td>
                                            <?php echo $bm->jumlah ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('admin/barangmasuk/edit/' . $bm->id_barang_masuk) ?>" class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/barangmasuk/delete/' . $bm->id_barang_masuk) ?>')" href="#!" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
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