<div id="page-wrapper">
    <div class="container-fluid">
        <!-- DataTables -->

        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title m-b-0"><?= $title; ?></h3>

                    <div class="card-header">
                        <a href="<?php echo base_url('supplier/add') ?>"><i class="fa fa-plus"></i> Add New</a>

                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID Supplier</th>
                                    <th>Kode_supplier</th>
                                    <th>Nama Supplier</th>
                                    <th>Alamat Supplier</th>
                                    <th>Kota Supplier</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($supplier as $sp) : ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $sp->id_supplier ?>
                                        </td>
                                        <td>
                                            <?php echo $sp->kode_supplier ?>
                                        </td>
                                        <td>
                                            <?php echo $sp->nama_supplier ?>
                                        </td>
                                        <td>
                                            <?php echo $sp->alamat ?>
                                        </td>
                                        <td>
                                            <?php echo $sp->kota ?>
                                        </td>

                                        <td>
                                            <a href="<?php echo base_url('supplier/edit/' . $sp->id_supplier) ?>" class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('supplier/delete/' . $sp->id_supplier) ?>')" href="#!" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
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