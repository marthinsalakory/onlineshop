<div class="p-5">
    <h2 class="mb-4">Daftar Pembeli</h2 class="mb-4">
    <table class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nama pembeli</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah Barang</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th><i class="fas fa-cog"></i></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (pembeli($_GET['kode_produk']) as $p) : ?>
                <?php if ($p['penjual_id'] != user()->id) continue; ?>
                <tr class="produk">
                    <td><?= $p['nama_lengkap']; ?></td>
                    <td><?= $p['nama_produk']; ?></td>
                    <td class="harga">Rp. <?= $p['harga']; ?></td>
                    <td><?= $p['jumlah_barang']; ?> barang</td>
                    <td>Rp. <?= $p['harga'] * $p['jumlah_barang']; ?></td>
                    <td><?= $p['status'] == 0 ? '<span class="text-warning"><i class="fas fa-recycle"></i> ' : ($p['status'] == 1 ? "<span class='text-primary'><i class='fas fa-truck-moving'></i> " : ($p['status'] == 2 ? '<span class="text-success"><i class="fas fa-check-circle"></i> ' : '<span class="text-danger"><i class="fas fa-window-close"></i> ')); ?><?= $p['status'] == 0 ? 'Masih diproses' : ($p['status'] == 1 ? 'Dalam pengiriman' : ($p['status'] == 2 ? 'Telah diterima' : 'Dibatalkan')); ?></span></td>
                    <td>
                        <button onclick="window.location.href='<?= BASEURL; ?>/slip_pembeli?id_proses=<?= $p['id_proses'] ?>'" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button>
                        <button id="moda_status" data-proses_id="<?= $p['id_proses']; ?>" data-status="<?= $p['status']; ?>" data-bs-toggle="modal" data-bs-target="#editstatus" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Edit Status -->
<div class="modal fade" id="editstatus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="POST">
            <input type="hidden" name="id_proses" id="id_proses">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="status" class="label-control">Pilih Status :</label>
                    <div class="form-check">
                        <input value="0" class="form-check-input" type="radio" name="status" id="status1">
                        <label class="form-check-label text-warning" for="status1">
                            <i class="fas fa-recycle"></i> Dalam Proses
                        </label>
                    </div>
                    <div class="form-check">
                        <input value="1" class="form-check-input" type="radio" name="status" id="status2">
                        <label class="form-check-label text-primary" for="status2">
                            <i class='fas fa-truck-moving'></i> Dalam Pengiriman
                        </label>
                    </div>
                    <div class="form-check">
                        <input value="2" class="form-check-input" type="radio" name="status" id="status3">
                        <label class="form-check-label text-success" for="status3">
                            <i class="fas fa-check-circle"></i> Telah Diterima
                        </label>
                    </div>
                    <div class="form-check">
                        <input value="3" class="form-check-input" type="radio" name="status" id="status4">
                        <label class="form-check-label text-danger" for="status4">
                            <i class="fas fa-window-close"></i> Dibatalkan
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#moda_status").click(function() {
            var status = $(this).data('status');
            var proses_id = $(this).data('proses_id');
            $("#id_proses").val(proses_id);
            $("input").removeAttr("checked");

            if (status == 0) {
                $("#status1").attr('checked', '');
            } else if (status == 1) {
                $("#status2").attr('checked', '');
            } else if (status == 2) {
                $("#status3").attr('checked', '');
            } else {
                $("#status4").attr('checked', '');
            }
        });
    });
</script>