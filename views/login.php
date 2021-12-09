<div class="p-5">
    <?php if ($error > 0) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal Masuk!</strong> Nama pengguna atau kata sandi salah.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if (isset($_SESSION['is_login'])) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Peringatan!</strong> Anda harus login terlebih dahulu.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['is_login']); ?>
    <?php endif; ?>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card p-3 py-4">
                    <div class="text-center">
                        <img src="<?= BASEURL; ?>/assets/img/toko_online.jpg" width="200" class="rounded-circle">
                    </div>
                    <div class="mt-3">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Nama Pengguna</label>
                                <input type="text" name="username" class="form-control" id="username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Katas Sandi</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <button type="submit" name="masuk" class="btn btn-primary">Masuk</button>
                        </form>
                    </div>
                    <div class="mt-3">
                        <p>Belum punya akun? <a href="<?= BASEURL; ?>/register">Daftar disini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>