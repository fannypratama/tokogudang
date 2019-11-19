<div id="page-wrapper">
    <div class="container-fluid">
        <!-- DataTables -->

        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title m-b-0">Data Table</h3>

                    <div class="card-header">
                        <a href="<?php echo base_url('Product/add') ?>"><i class="fa fa-plus"></i> Add New</a>

                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Photo</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($product as $product) : ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $product->name ?>
                                        </td>
                                        <td>
                                            <?php echo $product->price ?>
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url('upload/product/' . $product->image) ?>" width="64" />
                                        </td>
                                        <td class="small">
                                            <?php echo substr($product->description, 0, 120) ?></td>
                                        <td width="250">
                                            <a href="<?php echo base_url('product/edit/' . $product->product_id) ?>" class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('product/delete/' . $product->product_id) ?>')" href="#!" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
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