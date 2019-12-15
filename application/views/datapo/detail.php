<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"></h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">

                            <li class="active">Detail transaksi PO</li>

                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
     <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><a href="<?php echo site_url('datapo') ?>"><i class="fa fa-arrow-left"></i> Back </a> 
                                <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"></i></a></div>
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                   
                                         <br> 

                    <div class="table-responsive">
                        <table class="table table-striped" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="15">No</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <!-- <th>Satuan</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php $no = 1;
                                
                                 foreach ($detail as $dtl) : 
                                    ?>
                                    <tr>

                                         <td><?php echo $no++; ?></td>
                                        <td>
                                            <?php echo
                                                    $this->db->get_where('mbarang', array('kode_mbarang' => $dtl->kode_mbarang))->row()->nama;
                                                ?>
                                        </td>
                                        <td>
                                            <?php echo $dtl->qty ?>
                                        </td>
                                        <!-- <td>
                                            <?php echo $dtl->satuan ?>
                                        </td> -->
                                        <td>
                                            <a href="<?php echo base_url('datapo/edit/' . $dtl->id_data) ?>" class="btn btn-small "><i class="fa fa-edit"></i> Print</a>
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