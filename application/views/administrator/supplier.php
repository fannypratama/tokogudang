<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"></h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">

                            <li class="active">Suplier</li>

                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><?= $title; ?>
                                <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"></i></a></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                  <div class="btn-group pull-right"><a href="<?php echo base_url(); ?>supplier/add" class="fcbtn btn btn-outline btn-success btn-1d" role="button" data-toggle="tooltip" title="Add Admin" width="100%"><i class="fa fa-plus"></i> Add Supllier</a></div>
                            <br><br><br>

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
                                            <?php echo $sp->nama_supplier?>
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