<?= $this->include('layout/header') ?>

<h2 class="mb-4">Ubah Produk</h2>
<form action="<?= base_url('produk/update/' . $produk['id']) ?>" method="post" enctype="multipart/form-data" class="card p-4 shadow">
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" value="<?= $produk['nama'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="harga" value="<?= $produk['harga'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Foto (upload baru jika ingin ganti)</label><br>
        <img src="<?= base_url('uploads/' . $produk['foto']) ?>" width="100" class="mb-2"><br>
        <input type="file" name="foto" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
</form>

<?= $this->include('layout/footer') ?>