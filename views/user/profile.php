<div class="content-wrapper">
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
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?= $this->session->flashdata('pesan'); ?>
                    <div class="card card-lightblue card-outline">
                        <div class="card-body">
                            <h1 class="card-title mb-3"><?= $title; ?></h1>
                            <p class="card-text mb-2">
                                <a href="<?= base_url('user/editprofile'); ?>" role="button"
                                    class="btn btn-warning text-white btn-sm">+ Edit Profile</a>
                            </p>
                            <form action="<?= base_url('user/addriwayat'); ?>" method="POST">
                                <table class="table table-bordered">
                                    <tr>
                                        <th><img class="img-thumbnail" style="height: 100px;"
                                                src="<?= base_url('assets/profile/') . $user['image']; ?>"></th>
                                    </tr>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <td><?= $user['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>NIP</th>
                                        <td><?= $user['nip']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Tanggal Lahir</th>
                                        <td><?= $user['tempatlahir']; ?>, <?= $user['tgllahir']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td><?= $user['jk']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td><?= $user['alamat']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Agama</th>
                                        <td><?= $user['agama']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kewarganegaraan</th>
                                        <td><?= $user['warganegara']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Status Perkawinan</th>
                                        <td><?= $user['status']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Pendidikan Terakhir</th>
                                        <td><?= $user['pend_terakhir']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?= $user['email']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>No. Telepon</th>
                                        <td><?= $user['tlp']; ?></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>