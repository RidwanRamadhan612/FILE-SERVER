<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('user'); ?>" class="brand-link text-center">
        <span class="brand-text font-weight-bold "> FILE-SERVER </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="<?= base_url('user'); ?>" class="nav-link active">
                        <i class="nav-icon fas fa-fw fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('user/profile'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-fw fa-user-alt"></i>
                        <p>
                            Data Diri
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('user/pendidikan'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-fw fa-user-graduate"></i>
                        <p>
                            Pendidikan
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>