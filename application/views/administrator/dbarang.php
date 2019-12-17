 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"></h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">

                            <li class="active">databarang</li>

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
                   
                                          <!-- <div class="btn-group pull-right"><a href="<?php echo base_url(); ?>kategori/add" class="fcbtn btn btn-outline btn-success btn-1d" role="button" data-toggle="tooltip" title="Add Admin" width="100%"><i class="fa fa-plus"></i> Add kategori</a></div> -->
                            <br>

                    <div class="table-responsive">
                        <table class="table table-striped" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="15">No</th>
                                    <th>ID Data Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Nama Supplier</th>

                                    <th>Nama Barang</th>
                                    <th>Satuan</th>
                                    <th>Uraian</th>
                                    <!-- <th>Nama Kategori</th> -->


                                    <th>Stok</th>
                                    <th>Status</th>
                                    <th>Foto</th>

                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                 foreach ($dbarang as $databarang) :
                                    // $this->db->select_sum('qty');
                                    ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td width="150">
                                            <?php echo $databarang->id_dbarang ?>
                                        </td>
                                        <td>

                                            <?php echo
                                                    $this->db->get_where('mbarang', array('kode_mbarang' => $databarang->kode_mbarang))->row()->nama;
                                                ?>
                                        </td>
                                        <td>

                                            <?php echo
                                                    $this->db->get_where('supplier', array('kode_supplier' => $databarang->kode_supplier))->row()->nama_supplier;
                                                ?>
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
                                           
                                            <a href="<?php echo base_url('dbarang/edit/' . $databarang->kode_mbarang) ?>" class="btn btn-small"><i></i>  <?php  echo $databarang->stok; ?></a>
                                        </td>
                                        <td>
                                            <?php echo $databarang->status ?>
                                        </td>

                                        <td>
                                            <!-- <img src="/application/upload/mbarang/images.jpg"> -->
                                            <img src="<?php echo base_url(''); ?>upload/mbarang/<?php echo $databarang->foto; ?>" width="64" />
                                        </td>


                                        <!-- <td> -->
                                        <!-- <a href="<?php echo base_url('dbarang/edit/' . $databarang->id_dbarang) ?>" class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('dbarang/delete/' . $databarang->id_dbarang) ?>')" href="#!" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a> -->
                                        <!-- </td> -->
                                    
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