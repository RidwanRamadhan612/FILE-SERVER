<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="userDropdown" href="#" aria-haspopup="true"
                aria-expanded="false" role="button">
                <span class="mr-2 d-none d-lg-inline small"><?= $user['nama']; ?></span>
                <img class="img-profile rounded-circle" style="width: 30px;"
                    src="<?= base_url('assets/profile/') . $user['image']; ?>">
            </a>
            <div class="dropdown-menu shadow animated--grow-in dropdown-menu-right" aria-labelledby="userDropdown">
                <a href="#" class="dropdown-item">
                    <i class="fas fa-fw fa-user mr-2" aria-hidden="true"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">
                    <i class="fas fa-sign-out-alt fa-fw mr-2" aria-hidden="true"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->