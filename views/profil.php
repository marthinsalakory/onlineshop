<div class="p-5">
    <?php if (isset($error)) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal perbarui data!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card p-3 py-4">
                    <div class="text-center">
                        <img src="<?= BASEURL; ?>/assets/img/foto_profil/<?= user()->foto_profil; ?>" width="100" class="rounded-circle">
                    </div>
                    <div class="text-center mt-3">
                        <span class="bg-secondary p-1 px-4 rounded text-white"><?= user()->nama_pengguna; ?></span>
                        <h5 class="mt-2 mb-0"><?= user()->nama_lengkap; ?></h5>
                        <span><?= user()->no_telp; ?></span>
                        <div class="px-4 mt-1">
                            <p class="fonts">
                                Alamat: <?= user()->nama_jalan; ?>, RT <?= user()->rt; ?>, RW <?= user()->rw; ?>,Desa/Kelurahan <?= user()->kelurahan; ?>, Kota/Kabupaten <?= user()->kota; ?>, Kode Pos: <?= user()->kode_pos; ?>
                            </p>
                        </div>
                        <div class="buttons">
                            <button data-bs-toggle="modal" data-bs-target="#profil_ubah" class="btn btn-outline-primary px-4">Ubah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="profil_ubah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-light" id="exampleModalLabel">Ubah Profil</h5>
                <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <p>Kolom yang ada tanda * wajib di isi.</p>
                        <form method="POST" enctype="multipart/form-data">
                            <h3>Kontak:</h3>
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">* Nama Lengkap</label>
                                <input required name="nama_lengkap" value="<?= user()->nama_lengkap; ?>" type="text" class="form-control" id="nama_lengkap">
                            </div>
                            <div class="mb-3">
                                <label for="foto_profil" class="form-label">Foto Profil</label>
                                <input name="foto_profil" type="file" class="form-control <?= isset($error['foto_profil']) ? 'is-invalid' : ''; ?>" id="foto_profil">
                                <div id="foto_profil" class="invalid-feedback">
                                    File harus berekstensi jpg.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="no_telp" class="form-label">* No Telepon</label>
                                <input required name="no_telp" value="<?= user()->no_telp; ?>" type="text" class="form-control" id="no_telp">
                            </div>
                            <div class="mb-3">
                                <label for="nama_pengguna" class="form-label">* Nama Pengguna</label>
                                <input required name="nama_pengguna" value="<?= user()->nama_pengguna; ?>" type="text" class="form-control <?= isset($error['nama_pengguna']) ? 'is-invalid' : ''; ?>" id="nama_pengguna">
                                <div id="nama_pengguna" class="invalid-feedback">
                                    Nama pengguna harus unik.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="kata_sandi" class="form-label">* Kata Sandi</label>
                                <input required name="kata_sandi" value="<?= user()->kata_sandi; ?>" type="password" class="form-control" id="kata_sandi">
                            </div>
                            <h3 class="mt-5">Alamat:</h3>
                            <div class="mb-3">
                                <label for="nama_jalan" class="form-label">* Nama Jalan</label>
                                <input required name="nama_jalan" value="<?= user()->nama_jalan; ?>" type="text" class="form-control" id="nama_jalan">
                            </div>
                            <div class="mb-3">
                                <label for="rt" class="form-label">* RT</label>
                                <input required name="rt" value="<?= user()->rt; ?>" type="number" class="form-control" id="rt">
                            </div>
                            <div class="mb-3">
                                <label for="rw" class="form-label">* RW</label>
                                <input required name="rw" value="<?= user()->rw; ?>" type="number" class="form-control" id="rw">
                            </div>
                            <div class="mb-3">
                                <label for="kelurahan" class="form-label">* Nama Kelurahan / Desa</label>
                                <input required name="kelurahan" value="<?= user()->kelurahan; ?>" type="text" class="form-control" id="kelurahan">
                            </div>
                            <div class="mb-3">
                                <label for="kota" class="form-label">* Nama Kota / Kabupaten</label>
                                <input required name="kota" value="<?= user()->kota; ?>" type="text" class="form-control" id="kota">
                            </div>
                            <div class="mb-3">
                                <label for="kode_pos" class="form-label">* Kode Pos</label>
                                <input required name="kode_pos" value="<?= user()->kode_pos; ?>" type="number" class="form-control" id="kode_pos">
                            </div>
                            <button type="reset" class="btn btn-secondary">Kembalikan</button>
                            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>