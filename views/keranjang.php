<div class="p-5">
    <h2 class="mb-4">Keranjang Barang</h2 class="mb-4">
    <table class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Berat Produk</th>
                <th>Harga</th>
                <th>Jumlah Item</th>
                <th>Total Harga</th>
                <th><i class="fas fa-cog"></i></th>
            </tr>
        </thead>
        <tbody>
            <tr class="produk">
                <td>Mainan Anak</td>
                <td>1kg</td>
                <td class="harga">Rp.34000</td>
                <td>3 barang</td>
                <td class="total">Rp.102000</td>
                <td>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    <button class="btn btn-primary btn-sm"><i class="fas fa-money-bill-wave"></i></button>
                    <button class="btn btn-success btn-sm"><i class="fas fa-eye"></i></button>
                </td>
            </tr>
            <tr class="produk">
                <td>Permainan</td>
                <td>1kg</td>
                <td class="harga">Rp.34000</td>
                <td>3 barang</td>
                <td class="total">Rp.500000</td>
                <td>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    <button class="btn btn-primary btn-sm"><i class="fas fa-money-bill-wave"></i></button>
                    <button class="btn btn-success btn-sm"><i class="fas fa-eye"></i></button>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3"></td>
                <td>Total Semua Barang</td>
                <td class="totals">: Rp.-1</td>
                <td><button class="btn btn-primary btn-sm"><i class="fas fa-money-bill-wave"></i> Bayar Semua</button></td>
            </tr>
        </tfoot>
    </table>
</div>
<script>
    $(document).ready(function() {
        var total = $('.total').text();
        total = total.split('Rp.');
        var totals = 0;
        for (var i = 0; i < total.length; i++) {
            if (total[i] == '') {
                continue;
            }
            totals = totals + parseInt(total[i]);
        }
        $('.totals').text('Rp.' + totals);
    });
</script>