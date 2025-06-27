<?= $this->include('layout/header') ?>

<h2>Keranjang Belanja</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Foto</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($keranjang as $item): ?>
        <tr>
            <td><img src="<?= base_url('uploads/' . $item['foto']) ?>" width="60"></td>
            <td><?= $item['nama'] ?></td>
            <td><?= number_to_currency($item['harga'], 'IDR') ?></td>
            <td><?= $item['jumlah'] ?></td>
            <td><?= number_to_currency($item['subtotal'], 'IDR') ?></td>
            <td>
                <a href="<?= base_url('keranjang/hapus/' . $item['id']) ?>" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="<?= base_url('keranjang/kosongkan') ?>" class="btn btn-warning">Kosongkan Keranjang</a>
<a href="<?= base_url('keranjang/cetak_invoice') ?>" target="_blank" class="btn btn-primary">Cetak Invoice</a>

<?= $this->include('layout/footer') ?>
