<div class="p-5">
    <div class="row tmbol">
        <div class="col-lg-12 text-center mb-5">
            <button onclick="window.location.href='<?= BASEURL; ?>/pembeli?kode_produk=<?= $pb->kode_produk ?>'" class="btn btn-danger">Kembali</button>
            <button onclick="return print()" class="btn btn-primary">Cetak</button>
        </div>
    </div>
    <div class="row text-center prnt">
        <div class="col-lg-12">
            <table class="table">
                <tbody>
                    <tr>
                        <td colspan="2"><img width="60px" height="60px" src="assets/img/produk/<?= $pb->gambar; ?>" alt=""></td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">Status</th>
                        <td style="text-align: left;" class="text-primary">: <span class="text-primary"><?= $pb->status == 0 ? '<i class="fas fa-recycle"></i> ' : ($pb->status == 1 ? "<i class='fas fa-truck-moving'></i> " : ($pb->status == 2 ? '<i class="fas fa-check-circle"></i> ' : '<i class="fas fa-window-close"></i> ')); ?><?= $pb->status == 0 ? 'Masih diproses' : ($pb->status == 1 ? 'Dalam pengiriman' : ($pb->status == 2 ? 'Telah diterima' : 'Dibatalkan')); ?></span></td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">Kode</th>
                        <td style="text-align: left;">: <?= $pb->kode_produk; ?></td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">Nama</th>
                        <td style="text-align: left;">: <?= $pb->nama_produk; ?></td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">Berat</th>
                        <td style="text-align: left;">: <?= $pb->berat_produk; ?> kg</td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">Harga</th>
                        <td style="text-align: left;">: Rp. <?= $pb->harga; ?></td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">Jumlah</th>
                        <td style="text-align: left;">: <?= $pb->jumlah_barang; ?></td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">Deskripsi</th>
                        <td style="text-align: left;">: <?= $pb->deskripsi; ?></td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">Nama Pembeli</th>
                        <td style="text-align: left;">: <?= $pb->nama_lengkap; ?></td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">No Telepon Pembeli</th>
                        <td style="text-align: left;">: <?= $pb->no_telp; ?></td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">Alamat Pembeli</th>
                        <td style="text-align: left;">: <?= $pb->nama_jalan; ?>, RT <?= $pb->rt; ?>, RW <?= $pb->rw; ?>,Desa/Kelurahan <?= $pb->kelurahan; ?>, Kota/Kabupaten <?= $pb->kota; ?>, Kode Pos: <?= $pb->kode_pos; ?></td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">Nama Pengirim</th>
                        <td style="text-align: left;">: <?= $pj->nama_lengkap; ?></td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">No Telepon Pengirim</th>
                        <td style="text-align: left;">: <?= $pj->no_telp; ?></td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">Alamat Pengirim</th>
                        <td style="text-align: left;">: <?= $pj->nama_jalan; ?>, RT <?= $pj->rt; ?>, RW <?= $pj->rw; ?>,Desa/Kelurahan <?= $pj->kelurahan; ?>, Kota/Kabupaten <?= $pj->kota; ?>, Kode Pos: <?= $pj->kode_pos; ?></td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">Metode Pembayaran</th>
                        <td style="text-align: left;">: Bayar di tempat</td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">Ongkos Kirim</th>
                        <td style="text-align: left;">: Rp. 50000</td>
                    </tr>
                    <tr>
                        <th style="text-align: right;">Total Harga</th>
                        <td style="text-align: left;">: Rp. <?= $pb->harga * $pb->jumlah_barang + 50000; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>