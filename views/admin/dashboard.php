<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $title; ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="alert alert-success text-center" role="alert">
                <h3 class="alert-heading font-weight-bold">Hi, <?= $admin['nama']; ?>!</h3>
                <p class="text-small">Selamat datang di FILE SERVER anda sebagai <?= $admin['nama']; ?></p>
                <hr>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>