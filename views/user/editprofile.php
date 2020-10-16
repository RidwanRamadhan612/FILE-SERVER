<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0 text-dark"><?= $title; ?></h1> -->
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-lightblue card-outline">
                        <div class="card-header">
                            <h3 class="card-title"><?= $title; ?></h3>
                        </div>
                        <div class="card-body">
                            <?= form_open_multipart('user/editprofile'); ?>
                            <div class="form-group">
                                <label>Foto</label>
                                <div class="row">
                                    <div class="col-md-2 mr-5">
                                        <img src="<?= base_url('assets/profile/') . $user['image']; ?>"
                                            class="img-thumbnail">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="<?= $user['email']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="<?= $user['nama']; ?>">
                                <?= form_error('nama', '<small class="text-danger form-text ml-2">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="number" class="form-control" id="nip" name="nip"
                                    value="<?= $user['nip']; ?>">
                                <?= form_error('nip', '<small class="text-danger form-text ml-2">', '</small>'); ?>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempatlahir" name="tempatlahir"
                                        value="<?= $user['tempatlahir']; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tanggal Lahir</label><br>
                                    <input type="date" name=" tgllahir" id="tgllahir" value="<?= $user['tgllahir']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    value="<?= $user['alamat']; ?>">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Jenis Kelamin</label>
                                    <select id="jk" name="jk" class="form-control" value="<?= $user['jk']; ?>">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Agama</label>
                                    <select id="agama" name="agama" class="form-control" value="<?= $user['agama']; ?>">
                                        <option value="Islam">Islam</option>
                                        <option value=" Kristen">Kristen</option>
                                        <option value="Katholik">Khatolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Khonghucu">Khonghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Kewarganegaraan</label>
                                    <input type="text" class="form-control" id="warganegara" name="warganegara"
                                        value="<?= $user['warganegara']; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Status Perkawinan</label>
                                    <select id="status" name="status" class="form-control"
                                        value="<?= $user['status']; ?>">
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Lajang">Lajang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>No. Telepon</label>
                                    <input type="text" class="form-control" id="tlp" name="tlp"
                                        value="<?= $user['tlp']; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Pendidikan Terakhir</label>
                                    <select id="pend_terakhir" name="pend_terakhir" class="form-control"
                                        value="<?= $user['pend_terakhir']; ?>">
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
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
</div>