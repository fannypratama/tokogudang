<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><?= $title; ?></h4>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6"> <img class="img-responsive" alt="user" src="<?= base_url('assets/plugins/images/') . $user['image'] ?>">
                <div class="white-box">
                    <div class="text-muted"><span class="m-r-10">Member since</span> <a class="text-muted m-l-10" href="#"><?= date('d F Y ', $user['date_created']); ?></a></div>
                    <h3 class="m-t-20 m-b-20"><?= $user['name'] ?></h3>
                    <p><?= $user['email'] ?></p>
                    <button class="btn btn-success btn-rounded waves-effect waves-light m-t-20">Read more</button>
                </div>
            </div>
            <!-- /row -->
            <!-- <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title m-b-0">Data Table</h3>
                    <p class="text-muted m-b-30">Data table example</p>
                    <a href="<?php echo site_url('admin/product/add') ?>"><i class="fa fa-plus"></i> Add New</a>


                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>price</th>
                                    <th>image</th>
                                    <th>description</th>
                                    <th>action</th>


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
                                            <?php echo substr($product->description, 0, 120) ?>...</td>
                                        <td width="250">
                                            <a href="<?php echo site_url('admin/product/edit/' . $product->product_id) ?>" class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/product/delete/' . $product->product_id) ?>')" href="#!" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Logout Delete Confirmation-->
            <!-- <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            </div> -->

            <!-- /.row -->