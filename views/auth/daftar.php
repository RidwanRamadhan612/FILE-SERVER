<div class="row mt-5 justify-content-center">
    <div class="col-md-6 col-xs-12 mt-5">
        <div class="card mt-5">
            <div class="card-body">
                <h2 class="text-center text-dark mb-3 mt-1"><?= $title; ?></h2>
                <hr>
                <form action="<?= base_url('auth/daftar'); ?>" method="POST">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-fw fa-user"></i> </span>
                            </div>
                            <input name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" type="text"
                                value="<?= set_value('nama'); ?>">
                        </div>
                        <?= form_error('nama', '<small class="text-danger form-text ml-2">', '</small>'); ?>
                    </div>
                    <div class="form-group row">
                        <div class="input-group col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-fw fa-envelope"></i> </span>
                            </div>
                            <input name="email" id="email" class="form-control" placeholder="Email" type="email"
                                value="<?= set_value('email'); ?>">
                        </div>
                        <div class="col-md-6">
                            <small class="text-danger form-text">*gunakan email aktif anda.</small>
                        </div>
                        <?= form_error('email', '<small class="text-danger form-text ml-3">', '</small>'); ?>
                    </div>
                    <div class="form-group row">
                        <div class="input-group col-md-6">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input class="form-control" placeholder="Password" name="password1" id="password1"
                                type="password">
                        </div>
                        <div class="input-group col-md-6">
                            <input class="form-control" placeholder="Ulangi Password" name="password2" id="password2"
                                type="password">
                        </div>
                        <?= form_error('password1', '<small class="text-danger form-text ml-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Daftar </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>