<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><?= $title; ?></h4>
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                <?php endif; ?>
                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                <?= $this->session->flashdata('message'); ?>
            </div>

        </div>



        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title m-b-0">Data Table</h3>
                    <p class="text-muted m-b-30">Data table example</p>
                    <a href="" data-toggle="modal" class="tombolTambahData" data-target="#newSubMenuModal"><i class="fa fa-plus"></i> Add New Sub Menu</a>


                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="hidden">id</th>
                                    <th>title</th>
                                    <th>Menu</th>
                                    <th>URL</th>
                                    <th>Icon</th>
                                    <th>Active</th>
                                    <th>Action</th>



                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($subMenu as $sm) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td class="hidden" width="150">
                                            <?= $sm['id']; ?>
                                        </td>
                                        <td width="150">
                                            <?= $sm['title']; ?>
                                        </td>
                                        <td width="150">
                                            <?= $sm['menu']; ?>
                                        </td>
                                        <td width="150">
                                            <?= $sm['url']; ?>
                                        </td>
                                        <td width="150">
                                            <?= $sm['icon']; ?>
                                        </td>
                                        <td width="150">
                                            <?= $sm['is_active']; ?>
                                        </td>
                                        <td>
                                            <a data-toggle="modal" data-target="#editSubMenuModal" data-id="<?= base_url('menu/edit/' . $sm['id']) ?>" id="btn-edit" class="btn btn-small edit"> <i class="fa fa-edit"></i> Edit</a>
                                            <a onclick="" href="<?= base_url('menu/delete/') . $sm['id']; ?>" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Logout Delete Confirmation-->
            < <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <a id="btn-delete" class="btn btn-danger" href="#m">Delete</a>
                        </div>
                    </div>
                </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newSubMenuModalLabel">Add New Sub Menu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('menu/submenu'); ?>" method="post">
                        <div class="modal-body">
                            <div class="modal-body">
                                <input type="hidden" name="id" value="">
                                <input type="text" name="title" id="title" class="form-control" placeholder="Sub Menu Title">
                            </div>
                            <div class="form-group">
                                <select name="menu_id" id="menu_id" class="form-control">
                                    <option value="">Select Menu</option>
                                    <?php foreach ($menu as $m) : ?>
                                        <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="modal-body">
                                <input type="text" name="url" id="url" class="form-control" placeholder="Sub Menu Url">
                            </div>
                            <div class="modal-body">
                                <input type="text" name="icon" id="icon" class="form-control" checked placeholder="Sub Menu Icon">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" value="1" name="is_active" id="is_active">
                                    <label for="is_active" class="form-check-label">Active?</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button id="btn" type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="editSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="editSubMenuModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editSubMenuModalLabel">Edit Sub Menu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('menu/submenu'); ?>" method="post">
                        <div class="modal-body">
                            <div class="modal-body">
                                <input type="text" name="title" id="title" class="form-control" placeholder="Sub Menu Title">
                            </div>
                            <div class="form-group">
                                <select name="menu_id" id="menu_id" class="form-control">
                                    <option value="">Select Menu</option>
                                    <?php foreach ($menu as $m) : ?>
                                        <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="modal-body">
                                <input type="text" name="url" id="url" class="form-control" placeholder="Sub Menu Url">
                            </div>
                            <div class="modal-body">
                                <input type="text" name="icon" id="icon" class="form-control" checked placeholder="Sub Menu Icon">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" value="1" name="is_active" id="is_active">
                                    <label for="is_active" class="form-check-label">Active?</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <script type="text/javascript">
            $(document).ready(function() {
                $(".edit").on('click', function() {
                    var id = $(this).attr('data-id');
                    console.log(id);
                });
            });
        </script>