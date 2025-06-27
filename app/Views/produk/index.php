<?= $this->include('layout/header') ?>

<h2 class="mb-4">Daftar Produk (Admin)</h2>
<a href="<?= base_url('produk/create') ?>" class="btn btn-primary mb-3">Tambah Produk</a>
<a href="<?= base_url('/produk/kosongkan') ?>" class="btn btn-danger mb-3"
   onclick="return confirm('Yakin ingin menghapus semua mobil?')">Kosongkan Data Mobil</a>

<div class="row row-cols-1 row-cols-md-3 g-4">
<?php foreach ($produk as $index => $p): ?>
    <div class="col">
        <div class="card h-100 shadow-sm <?= $index % 2 == 0 ? 'bg-light' : 'bg-white' ?>">
            <img src="<?= base_url('uploads/' . $p['foto']) ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title"><?= $p['nama'] ?></h5>
                <p class="card-text fw-bold text-success"><?= number_to_currency($p['harga'], 'IDR') ?></p>
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url('produk/edit/' . $p['id']) ?>" class="btn btn-warning btn-sm">Ubah</a>
                    <a href="<?= base_url('produk/hapus/' . $p['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>

<?= $this->include('layout/footer') ?>
