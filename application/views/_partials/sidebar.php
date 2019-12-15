<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div><img src="<?= base_url('assets/plugins/images/') . $user['image'] ?>" alt="user-img" class="img-circle"></div> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?= $user['name']; ?> <span class="caret"></span></a>
                <ul class="dropdown-menu animated flipInY">
                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?= base_url('auth') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <ul class="nav" id="side-menu">
             <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
             </li>
             
                    <li> <!-- <a href="administrator" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="m"></i> <span class="hide-menu"> DASHBOARD </span>  </a>
 -->
                    <li class="nav-small-cap m-t-10">- -Master Data</li>
                    <li> <a href="<?= base_url(); ?>/kategori" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="&#xe001;"></i> <span class="hide-menu"> Kategori </span>  </span></span></a>     
                    </li>
                     <li> <a href="<?= base_url(); ?>/supplier" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="A"></i> <span class="hide-menu"> Supplier </span>  </span></span></a>     
                    </li>
                     <li> <a href="<?= base_url(); ?>/mbarang" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="Z"></i> <span class="hide-menu"> Barang </span>  </span></span></a>     
                    </li>
            
             </li>
                
                    <li class="nav-small-cap m-t-10">- -Transaksi</li>
                    <li> <a href="<?= base_url(); ?>/transaksi_masuk" class="waves-effect active"><i class="linea-icon linea-elaborate fa-fw" data-icon="Z"></i> <span class="hide-menu"> Barang Masuk </span>  </span></span></a>     
                    </li>
                     <!-- <li> <a href="javascript:void(0);" class="waves-effect active"><i class=""></i> <span class="hide-menu text-danger"> Barang Keluar <span class="fa arrow"></span> <span class="label label-rouded label-danger pull-right"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?= base_url(); ?>/transaksi_keluar">Barang Keluar Pengganti</a> </li>
                            <li> <a href="<?= base_url(); ?>/datapo">Barang Keluar PO</a> </li>
                            </ul>
                    </li> -->
                     <li> <a href="<?= base_url(); ?>transaksi_keluar" class="waves-effect active"><i class="linea-icon linea-elaborate fa-fw" data-icon="&"></i> <span class="hide-menu"> Barang Keluar Pengganti </span>  </span></span></a>
                     <li> <a href="<?= base_url(); ?>datapo" class="waves-effect active"><i class="linea-icon linea-elaborate fa-fw" data-icon="&"></i> <span class="hide-menu"> Barang Keluar Po </span>  </span></span></a>    

                     <li> <a href="refound" class="waves-effect active"><i class="linea-icon linea-elaborate fa-fw" data-icon="&"></i> <span class="hide-menu"> Barang Refound </span>  </span></span></a>
             </li>
                    <li class="nav-small-cap m-t-10">- -Data</li>
                    <li> <a href="<?= base_url(); ?>/dbarang" class="w68aves-effect active"><i class="linea-icon linea-ecommerce fa-fw" data-icon="A"></i> <span class="hide-menu"> Data Barang </span>  </span></span></a>     
                    </li>
                     <li> <a href="<?= base_url(); ?>/transaksi" class="waves-effect active"><i class="linea-icon linea-ecommerce fa-fw" data-icon="y"></i> <span class="hide-menu"> Transaksi Barang  </span>  </span></span></a>     
                    </li>
                    <!-- <li> <a href="<?= base_url(); ?>/datapo" class="w68aves-effect active"><i class="linea-icon linea-ecommerce fa-fw" data-icon="A"></i> <span class="hide-menu"> Data PO </span>  </span></span></a>     
                    </li> -->

                     <li><a href="<?= base_url('auth') ?>" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log Out</span></a></li>




                

    </div>
</div>
<!-- Left navbar-header end -->