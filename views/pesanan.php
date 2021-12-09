<div class="p-5">
    <?php if (isset($_SESSION['jadi'])) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Info!</strong> <?= $_SESSION['jadi']; ?>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['jadi']); ?>
    <?php endif; ?>
    <h2 class="mb-4">Daftara Pesanan</h2 class="mb-4">
    <table class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama Produk</th>
                <th>Kode Produk</th>
                <th>Berat Produk</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th><i class="fas fa-cog"></i></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (produk() as $p) : ?>
                <?php
                if ($p['id'] != user()->id) continue; ?>
                <tr class="produk">
                    <td><img height="60px" width="60px" src="<?= BASEURL ?>/assets/img/produk/<?= $p['gambar']; ?>" alt=""></td>
                    <td><?= $p['nama_produk']; ?></td>
                    <td><?= $p['id_produk']; ?></td>
                    <td><?= $p['berat_produk']; ?> kg</td>
                    <td class="harga">Rp. <?= $p['harga']; ?></td>
                    <td><?= $p['deskripsi']; ?></td>
                    <td>
                        <a href="pembeli?kode_produk=<?= $p['id_produk']; ?>">
                            <button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button>
                        </a>
                        <a href="edit_pesanan?kode_produk=<?= $p['id_produk']; ?>">
                            <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        </a>
                        <a href="?hapus=<?= $p['id_produk']; ?>">
                            <button onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>