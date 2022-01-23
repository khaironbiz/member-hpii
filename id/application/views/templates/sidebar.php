        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://hpii.or.id" target="_blank">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-code"></i>
                </div>
                <div class="sidebar-brand-text mx-3">HPII-PPNI</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- QUERY MENU -->
            <?php
            $tamu       = 1;
            if ($user['role_id'] == 1) {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('menu'); ?>">
                        <i class="fas fa-file-code"></i>
                        <span>Menu</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('menu/submenu'); ?>">
                        <i class="fas fa-file-code"></i>
                        <span>Sub Menu</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('anggota'); ?>">
                        <i class="fas fa-file-code"></i>
                        <span>Anggota</span></a>
                </li>
            <?php
            }
            ?>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user'); ?>">
                    <i class="fas fa-user-md"></i>
                    <span>My Profile</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End  of Sidebar -->