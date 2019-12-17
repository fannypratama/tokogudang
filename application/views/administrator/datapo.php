<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"></h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">

                    <li class="active">Data Po</li>

                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-sm-12">
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <div class="panel panel-default">
                <div class="panel-heading"><?= $title; ?>
                    <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"></i></a></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">

                        <div class="btn-group pull-right"><a href="<?php echo base_url(); ?>datapo/add" class="fcbtn btn btn-outline btn-success btn-1d" role="button" data-toggle="tooltip" title="Add Admin" width="100%"><i class="fa fa-plus"></i> Add data Po</a></div>
                        <br><br><br>

                        <div class="table-responsive">
                            <table class="table table-striped" id="myTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="15">No</th>

                                        <th>ID Transaksi</th>
                                        <th>Tanggal Transaksi</th>
                                        <!--    <th>No Transaksi</th> -->
                                        <th>Tujuan</th>
                                        <th>Alamat</th>
                                        <th>No Po</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1;

                                    foreach ($datapo as $data) :
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>

                                            <td>
                                                <?php echo $data->id_data ?>
                                            </td>
                                            <td>
                                                <?php echo $data->tanggal_transaksi ?>
                                            </td>
                                            <!--    <td>
                                            <?php echo
                                                    $data->no_transaksi ?>
                                        </td> -->
                                            <td>
                                                <?php echo $data->tujuan ?>
                                            </td>
                                            <td>
                                                <?php echo $data->alamat ?>
                                            </td>
                                            <td>
                                                <?php echo $data->no_po ?>
                                            </td>

                                            <td>
                                                <a href="<?php echo base_url('datapo/edit/' . $data->no_po) ?>" class="btn btn-box-tool" data-toggle="tooltip" title="Tampilkan Detail" class="btn btn-small text-info"><i class="fa fa-plus"></i>Detail</a>
                                                <a href="<?php echo base_url(); ?>datapo/delete/<?= $data->no_po ?>" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
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

<script type="text/javascript">
    $(function() {
        // Remove button click
        $(document).on(
            'click',
            '[data-role="dynamic-fields"] > .form-inline [data-role="remove"]',
            function(e) {
                e.preventDefault();
                $(this).closest('.form-inline').remove();
            }
        );
        // Add button click
        $(document).on(
            'click',
            '[data-role="dynamic-fields"] > .form-inline [data-role="add"]',
            function(e) {
                e.preventDefault();
                var container = $(this).closest('[data-role="dynamic-fields"]');
                new_field_group = container.children().filter('.form-inline:first-child').clone();
                new_field_group.find('input').each(function() {
                    $(this).val('');
                });
                container.append(new_field_group);
            }
        );
    });
</script>