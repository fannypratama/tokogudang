         <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box printableArea">
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address><br>
                                            <h3><b>Invoice</b> <!-- <span class="pull-right">
                               # <?php echo $datapo->tujuan ?> </span> --></h3>

                               <br><br>
                                            <h3> &nbsp;<b class="text-danger">Nakula Sadewa</b></h3>
                                            <p class="text-muted m-l-5">Ruko Waringin 1 Jl. Candi Waringin,
                                                <br/> Kel. Mojolangu Kec. Lowokwaru,
                                                <br/> Malang – 65142</p>
                                        </address>
                                    </div>
                                    <div class="pull-right text-right">
                                        <address>
                                            <?php foreach ($datapo as $datapo) :?>
                                            <h3><br/><?php echo $datapo->no_po ?></h3>
                                             <br><h3> &nbsp;<b >To,</b></h3>
                                            <p class="text-muted m-l-5"><?php echo $datapo->tujuan ?>
                                            <!-- <p class="text-muted m-l-30">E 104, Dharti-2, -->
                                                <br ><?php echo $datapo->alamat ?>,
                                                <!-- <br/> <?=
                                                    $this->db->get_where('datapo
                                                        ', array('no_po' => $datapo->no_po))->row()->no_po;?>, -->
                                                <!-- <br/> Bhavnagar - 364002</p> -->
                                            <br class="m-t-30"><b>Invoice Date :</b> <i class="fa fa-calendar"></i><?php echo $datapo->tanggal_transaksi ?>
                                        </p>
                                            <!-- <p><b>Due Date :</b> <i class="fa fa-calendar"></i> 25th Jan 2017</p> -->
                                         <?php endforeach; ?>
                                        </address>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th width="20">No</th>
                                                    <!-- <th>NO PO</th> -->
                                                    <th  width="40">Item</th>
                                                    <th  width="40">Quantity</th>
                                                    <!-- <th >Satuan</th> -->
                                                    <!-- <th >ID Data</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php $no = 1;
                                                 
                                                 foreach ($detail as $value) : ?>
                                                <tr>
                                                    <td width="20"><?php echo $no++; ?></td>
                                                    <!-- <td><?= $value->id_data; ?></td> -->
                                                    <td width="40"><?php echo
                                                    $this->db->get_where('mbarang', array('kode_mbarang' => $value->kode_mbarang))->row()->nama;
                                                
                                                ?> </td>
                                                    <td width="40"><?= $value->qty ?></td>
                                                    
                                                    <!-- <td ><?php echo
                                                    $this->db->get_where('detail
                                                        ', array('qty' => $value->qty))->row()->satuan;?>
                                                    </td> --> 
                                                </tr>
                                                 <?php endforeach; ?>
                                                <tr>
                                                    <td></td>
                                                    <td><p align="right">Total :</p></td>
                                                    <td><?= $total->qty ?></td>
                                                </tr>
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!-- <div class="pull-right m-t-30 text-right"> -->
                                        <!-- <p>Sub - Total amount: $13,848</p>
                                        <p>vat (10%) : $138 </p> -->
                                        <!-- <hr>
                                        <h3> <b>Total :</b> $13,986</h3> </div>
                                     --><div class="clearfix"></div>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                                                            <div class="text-pull-right">
                                        <button id="print" class="btn btn-danger " type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                                    </div>
                    </div>
                </div>
                <!-- .row -->
                <!-- /.row -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul>
                                <li><b>Layout Options</b></li>
                                <li>
                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" type="checkbox" class="fxhdr">
                                        <label for="checkbox1"> Fix Header </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-warning">
                                        <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
                                        <label for="checkbox2"> Fix Sidebar </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-success">
                                        <input id="checkbox4" type="checkbox" class="open-close">
                                        <label for="checkbox4"> Toggle Sidebar </label>
                                    </div>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Elite Admin brought to you by themedesigner.in </footer>
        </div>
        