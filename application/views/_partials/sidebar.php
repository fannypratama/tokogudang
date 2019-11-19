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
                    <li><a href="login.html"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <ul class="nav" id="side-menu">
            <!-- QUERY MENU -->
            <?php
            $role_id = $this->session->userdata('role_id');
            $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu`
                            ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                            WHERE `user_access_menu`.`role_id` = $role_id 
                            AND `active` = 1
                            ORDER BY `user_menu`. `nomor` ASC 
                            ";

            $menu = $this->db->query($queryMenu)->result_array();

            ?>

            <!-- LOOPING MENU -->


            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                    </span> </div>
                <!-- /input-group -->
            </li>
            <?php foreach ($menu as $m) : ?>
                <!-- <li class="nav-small-cap m-t-10 fa-fw"> <?= $m['menu']; ?></li> -->

                <!-- SIAPKAN SUB-MENU SESUAI MENU -->

                <?php
                    $menuId = $m['id'];
                    $querySubMenu = " SELECT *
                                FROM `user_sub_menu` 
                                WHERE `menu_id` = $menuId
                                AND `is_active` = 1";

                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>
                <?php foreach ($subMenu as $sm) : ?>

                    <li> <a href="<?= base_url($sm['url']); ?>" class="waves-effect"><i class="<?= $sm['icon']; ?>"></i> <span class="hide-menu"> <?= $sm['title']; ?> </span></a>

                    </li>


                <?php endforeach; ?>
            <?php endforeach ?>

            <li><a href="<?= base_url('auth') ?>" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log Out</span></a></li>

    </div>
</div>
<!-- Left navbar-header end -->