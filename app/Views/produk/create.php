<?= $this->include('layout/header') ?>

<h2 class="mb-4">Tambah Mobil</h2>
<form action="<?= base_url('produk/store') ?>" method="post" enctype="multipart/form-data" class="card p-4 shadow">
    <div class="mb-3">
        <label>Nama Mobil</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Merk</label>
        <input type="text" name="merk" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Tahun</label>
        <input type="number" name="tahun" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Foto</label>
        <input type="file" name="foto" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?= $this->include('layout/footer') ?>