<div class="p-5">
    <?php if (isset($error)) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal Mendaftar!</strong>
            <?php for ($i = 0; $i < count($error); $i++) : ?>
                <li><?= $error[$i]; ?></li>
            <?php endfor; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card p-3 py-4">
                    <div class="text-center">
                        <img src="<?= BASEURL; ?>/assets/img/toko_online.jpg" width="200" class="rounded-circle">
                    </div>
                    <div class="mt-3">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input value="<?= old('nama_lengkap'); ?>" required type="text" name="nama_lengkap" class="form-control" id="nama_lengkap">
                            </div>
                            <div class="mb-3">
                                <label for="no_telp" class="form-label">Nomor Telephone</label>
                                <input value="<?= old('no_telp'); ?>" required type="number" name="no_telp" class="form-control" id="no_telp">
                            </div>
                            <div class="mb-3">
                                <label for="nama_pengguna" class="form-label">Nama Pengguna</label>
                                <input value="<?= old('nama_pengguna'); ?>" required type="text" name="nama_pengguna" class="form-control" id="nama_pengguna">
                            </div>
                            <div class="mb-3">
                                <label for="kata_sandi" class="form-label">Katas Sandi</label>
                                <input value="<?= old('kata_sandi'); ?>" required type="password" name="kata_sandi" class="form-control" id="password">
                            </div>
                            <div class="mb-3">
                                <label for="nama_jalan" class="form-label">Nama Jalan</label>
                                <input value="<?= old('nama_jalan'); ?>" required type="text" name="nama_jalan" class="form-control" id="nama_jalan">
                            </div>
                            <div class="mb-3">
                                <label for="rt" class="form-label">RT</label>
                                <input value="<?= old('rt'); ?>" required type="number" name="rt" class="form-control" id="rt">
                            </div>
                            <div class="mb-3">
                                <label for="rw" class="form-label">RW</label>
                                <input value="<?= old('rw'); ?>" required type="number" name="rw" class="form-control" id="rw">
                            </div>
                            <div class="mb-3">
                                <label for="kelurahan" class="form-label">Nama Kelurahan / Desa</label>
                                <input value="<?= old('kelurahan'); ?>" required type="text" name="kelurahan" class="form-control" id="kelurahan">
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label">Nama Kota / Kabupaten</label>
                                <input value="<?= old('kota'); ?>" required type="text" name="kota" class="form-control" id="kota">
                            </div>
                            <div class="mb-3">
                                <label for="kode_pos" class="form-label">Kode Pos</label>
                                <input value="<?= old('kode_pos'); ?>" required type="number" name="kode_pos" class="form-control" id="kode_pos">
                            </div>
                            <div class="mb-3">
                                <label for="foto_profil" class="form-label">Foto Profil ( .jpg )</label>
                                <input required type="file" name="foto_profil" class="form-control" id="foto_profil">
                            </div>
                            <button type="submit" name="daftar" class="btn btn-primary">Daftar</button>
                        </form>
                    </div>
                    <div class="mt-3">
                        <p>Sudah punya akun? <a href="<?= BASEURL; ?>/login">Masuk disini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>