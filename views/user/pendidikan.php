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

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?= $this->session->flashdata('pesan'); ?>
                    <div class="card card-lightblue card-outline card-default">
                        <div class="card-body">
                            <h4 class="mb-2">Tambah Pendidikan</h4>
                            <form action="<?= base_url('user/addpendidikan'); ?>" method="POST">
                                <table class="table table-borderless" id="table">
                                    <input type="hidden" value="<?= $user['id_user']; ?>" name="id_user[]">
                                    <thead>
                                        <tr>
                                            <th>Jenjang Pendidikan</th>
                                            <th>Nama Lembaga</th>
                                            <th>Tahun Lulus</th>
                                            <th>Jurusan</th>
                                            <th><button type="button" class="btn btn-primary btn-sm tambah"
                                                    id="tambah">+</button>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        <tr>
                                            <td>
                                                <select class="form-control custom-select" name="pendidikan[]"
                                                    id="pendidikan">
                                                    <option value="SD">SD</option>
                                                    <option value="SMP">SMP</option>
                                                    <option value="SMA">SMA</option>
                                                    <option value="SMK">SMK</option>
                                                    <option value="D1">D1</option>
                                                    <option value="D2">D2</option>
                                                    <option value="D3">D3</option>
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>
                                                </select>
                                                <?= form_error('pendidikan', '<small class="text-danger form-text ml-2">', '</small>'); ?>
                                            </td>
                                            <td><input type="text" class="form-control" name="lembaga[]" id="lembaga">
                                                <?= form_error('lembaga', '<small class="text-danger form-text ml-2">', '</small>'); ?>
                                            </td>
                                            <td><input type="text" class="form-control" name="lulusan[]" id="lulusan">
                                                <?= form_error('lulusan', '<small class="text-danger form-text ml-2">', '</small>'); ?>
                                            </td>
                                            <td><input type="text" class="form-control" name="jurusan[]" id="jurusan">
                                                <?= form_error('jurusan', '<small class="text-danger form-text ml-2">', '</small>'); ?>
                                            </td>
                                            <td><button type="button" class="btn btn-sm btn-danger hapus">-</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>
                                                <button type="submit" class="btn btn-primary btn-flat">Submit</button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </form>

                            <h4 class="mb-3 mt-5"><?= $title; ?></h4>
                            <?= form_open_multipart('user/pendidikan'); ?>
                            <table id="example1" class="dataTables table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Jenjang</th>
                                        <th>Nama Lembaga</th>
                                        <th>Jurusan</th>
                                        <th>Tahun Lulus</th>
                                        <th>File Ijazah</th>
                                        <th>File Transkip</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($riwayat as $row) {
                                    ?>
                                    <input type="hidden" value="<?= $row['id_user'] ?>">
                                    <tr>
                                        <td><?= $row['pendidikan']; ?></td>
                                        <td><?= $row['lembaga']; ?></td>
                                        <td><?= $row['lulusan']; ?></td>
                                        <td><?= $row['jurusan']; ?></td>
                                        <td><?= $row['file_ijazah']; ?></td>
                                        <td><?= $row['file_transkip']; ?></td>
                                        <td>
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fas fa-fw fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>