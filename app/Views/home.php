<?= $this->include('layout/header') ?>

<!-- Fade-in Animation -->
<style>
    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.8s ease-out forwards;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .card:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .btn-gradient {
        background: linear-gradient(45deg, #198754, #28a745);
        color: white;
        border: none;
    }

    .btn-gradient:hover {
        background: linear-gradient(45deg, #157347, #218838);
        color: #fff;
    }
</style>

<h2 class="text-center mb-5 text-dark fw-bold">Roues d’Or</h2>
<p class="text-center mb-4 text-muted" style="font-size: 1.1rem;">
    Élevez votre style de conduite. <br>
    Di <strong>Roues d'Or</strong>, kami menghadirkan koleksi mobil premium dengan kualitas tak tertandingi — perpaduan antara kemewahan, performa, dan keanggunan. Setiap kendaraan adalah mahakarya yang dirancang untuk jiwa-jiwa berkelas yang mencintai kesempurnaan.
</p>

<?php if (!empty($produk)): ?>
<div class="row row-cols-1 row-cols-md-3 g-4">
<?php foreach ($produk as $index => $mobil): ?>
    <div class="col fade-in" style="animation-delay: <?= 0.1 * $index ?>s">
        <div class="card h-100 border-0 shadow-sm" style="background: linear-gradient(to bottom right, #f8f9fa, #e9ecef);">
            <img src="<?= base_url('uploads/' . ($mobil['foto'] ?? 'default.jpg')) ?>" class="card-img-top rounded-top" style="height: 200px; object-fit: cover; border-bottom: 1px solid #dee2e6;">
            <div class="card-body">
                <h5 class="card-title text-dark"><?= $mobil['merk'] ?> <span class="fw-bold"><?= $mobil['nama'] ?></span></h5>
                <p class="card-text text-muted mb-1">🚘 Tahun: <?= $mobil['tahun'] ?></p>
                <p class="card-text fw-bold fs-5 text-success"><?= number_to_currency($mobil['harga'], 'IDR') ?></p>
                <a href="<?= base_url('keranjang/tambah/' . $mobil['id']) ?>" class="btn btn-gradient w-100">🛒 Beli Sekarang</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>
<?php else: ?>
<div class="alert alert-warning text-center fs-5">🚫 Belum ada mobil tersedia saat ini.</div>
<?php endif; ?>

<?= $this->include('layout/footer') ?>
