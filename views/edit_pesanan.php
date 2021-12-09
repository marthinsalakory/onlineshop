<form class="p-5" method="POST" enctype="multipart/form-data">
    <h2 class="mb-4">Formulir Edit Pesanan</h2>
    <div class="mb-3">
        <label for="nama_produk" class="form-label">Nama Produk</label>
        <input required name="nama_produk" value="<?= $p->nama_produk; ?>" type="text" class="form-control" id="nama_produk">
    </div>
    <div class="mb-3">
        <label for="berat_produk" class="form-label">Berat Produk (Kg)</label>
        <input required name="berat_produk" value="<?= $p->berat_produk; ?>" type="number" class="form-control" id="berat_produk">
    </div>
    <div class="mb-3">
        <label for="harga_produk" class="form-label">Harga Produk (Rp)</label>
        <input required name="harga_produk" value="<?= $p->harga; ?>" type="number" class="form-control" id="harga_produk">
    </div>
    <div class="mb-3">
        <label for="gambar_produk" class="form-label">Gambar Produk (.jpg)</label>
        <input name="gambar_produk" type="file" class="form-control <?= isset($error) ? 'is-invalid' : ''; ?>" id="gambar_produk">
        <div id="gambar_produk" class="invalid-feedback">
            Gambar produk harus berekstensi jpg
        </div>
    </div>
    <div class="mb-3">
        <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
        <textarea required class="form-control" name="deskripsi_produk" id="deskripsi_produk" cols="30" rows="5"><?= $p->deskripsi; ?></textarea>
    </div>
    <button type="reset" class="btn btn-secondary">Hapus</button>
    <button type="submit" name="jual" class="btn btn-primary">Simpan Perubahan</button>
</form>