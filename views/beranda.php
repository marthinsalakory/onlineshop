<div class="row">
    <?php foreach (produk() as $p) : ?>
        <?php
        if (!isset($_SESSION['login'])) {
            $user_id = -1;
        } else {
            $user_id = user()->id;
        }
        if ($p['id'] == $user_id) {
            continue;
        } ?>
        <div class="p-5 col-lg-3 col-sm-6 produk">
            <div class="card" style="width: 18rem;">
                <img data-gambar="<?= $p['gambar']; ?>" data-kode_produk="<?= $p['id_produk']; ?>" data-nama_produk="<?= $p['nama_produk']; ?>" data-berat_produk="<?= $p['berat_produk']; ?>" data-harga="<?= $p['harga']; ?>" data-deskripsi="<?= $p['deskripsi']; ?>" data-bs-toggle="modal" data-bs-target="#detail_produk" style="cursor: pointer;" height="250px" src="assets/img/produk/<?= $p['gambar']; ?>" class="card-img-top produk_view" alt="...">
                <div class="card-body">
                    <h5 data-gambar="<?= $p['gambar']; ?>" data-kode_produk="<?= $p['id_produk']; ?>" data-nama_produk="<?= $p['nama_produk']; ?>" data-berat_produk="<?= $p['berat_produk']; ?>" data-harga="<?= $p['harga']; ?>" data-deskripsi="<?= $p['deskripsi']; ?>" data-bs-toggle="modal" data-bs-target="#detail_produk" style="cursor: pointer;" class="card-title produk_view"><?= $p['nama_produk']; ?></h5>
                    <p class="card-text">Rp. <?= $p['harga']; ?> <br>Penjual: <?= $p['nama_lengkap']; ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<!-- Modal -->
<div class="modal fade" id="detail_produk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-light" id="exampleModalLabel">Rincian Produk</h5>
                <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5 col-sm-12">
                        <img id="gambar" width="500px" height="500" src="" alt="">
                    </div>
                    <div class="col-lg-7 col-sm-12"><br><br>
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Kode Produk</th>
                                    <td id="kode_produk"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Produk</th>
                                    <td id="nama_produk"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Berat Produk</th>
                                    <td id="berat_produk"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <th scope="row">Harga</th>
                                    <td id="harga"></td>
                                </tr>
                                <tr>
                                    <th colspan="2" class="text-center" scope="row">Deskripsi</th>
                                </tr>
                                <tr>
                                    <td colspan="2" id="deskripsi"></td>
                                </tr>
                            </tbody>
                        </table>
                        <form method="POST">
                            <div class="row">
                                <input id="id_barang" type="hidden" name="id_barang">
                                <div class="col-lg-4 col-sm-4">
                                    <input name="jumlah_barang" value="1" class="form-control" type="number">
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <button class="btn btn-primary" name="beli" type="submit"><i class="fas fa-shopping-cart"></i> Beli Sekarang</button>
                                </div>
                            </div>
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
<script>
    $(document).ready(function() {
        $(".produk_view").click(function() {
            var gambar = $(this).data('gambar');
            var kode_produk = $(this).data('kode_produk');
            var nama_produk = $(this).data('nama_produk');
            var berat_produk = $(this).data('berat_produk');
            var harga = $(this).data('harga');
            var deskripsi = $(this).data('deskripsi');

            $('#gambar').attr('src', '<?= BASEURL ?>/assets/img/produk/' + gambar);
            $('#kode_produk').text(kode_produk);
            $('#id_barang').val(kode_produk);
            $('#nama_produk').text(nama_produk);
            $('#berat_produk').text(berat_produk + 'kg');
            $('#harga').text('Rp. ' + harga);
            $('#deskripsi').text(deskripsi);
        });
    });
</script>