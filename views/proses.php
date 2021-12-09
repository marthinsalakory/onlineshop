<div class="p-5">
    <h2 class="mb-4">Dalam Proses</h2 class="mb-4">
    <table class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah Barang</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th><i class="fas fa-cog"></i></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (proses() as $p) : ?>
                <?php if ($p['pembeli_id'] != user()->id) continue; ?>
                <tr class="produk">
                    <td><?= $p['nama_produk']; ?></td>
                    <td class="harga">Rp. <?= $p['harga']; ?></td>
                    <td><?= $p['jumlah_barang']; ?> barang</td>
                    <td>Rp. <?= $p['harga'] * $p['jumlah_barang']; ?></td>
                    <td><span class="text-primary"><?= $p['status'] == 0 ? '<i class="fas fa-recycle"></i> ' : ($p['status'] == 1 ? "<i class='fas fa-truck-moving'></i> " : ($p['status'] == 2 ? '<i class="fas fa-check-circle"></i> ' : '<i class="fas fa-window-close"></i> ')); ?><?= $p['status'] == 0 ? 'Masih diproses' : ($p['status'] == 1 ? 'Dalam pengiriman' : ($p['status'] == 2 ? 'Telah diterima' : 'Dibatalkan')); ?></span></td>
                    <td>
                        <button onclick="window.location.href='<?= BASEURL; ?>/slip?id_proses=<?= $p['id_proses'] ?>'" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>