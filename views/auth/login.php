<div class="row mt-5 justify-content-center">
    <div class="col-md-5 col-xs-12 mt-5">
        <div class="card mt-5">

            <div class="card-body">
                <h2 class="text-center text-dark mb-3 mt-1"><?= $title; ?></h2>
                <?= $this->session->flashdata('pesan'); ?>
                <hr>
                <form action="<?= base_url('auth'); ?>" method="POST">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-fw fa-envelope"></i> </span>
                            </div>
                            <input name="email" id="email" class="form-control" placeholder="Email" type="email">
                        </div>
                        <?= form_error('email', '<small class="text-danger form-text ml-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-fw fa-lock"></i> </span>
                            </div>
                            <input class="form-control" placeholder="Password" name="password" id="password"
                                type="password">
                        </div>
                        <?= form_error('password', '<small class="text-danger form-text ml-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Login </button>
                    </div> <!-- form-group// -->
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <p class="text-left"><a href="<?= base_url('auth/daftar'); ?>">Buat Akun</a></p>
                        </div>
                        <div class="col-md-6">
                            <p class="text-right"><a href="<?= base_url('auth/lupa'); ?>">Lupa?</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>