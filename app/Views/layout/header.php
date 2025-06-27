<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Toko Mobil' ?></title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('/') ?>">Roues d’Or</a>
    <div>
      <a class="nav-link d-inline text-white" href="<?= base_url('/') ?>">Home</a>
      <a class="nav-link d-inline text-white" href="<?= base_url('/produk') ?>">Produk</a>
      <a class="nav-link d-inline text-white" href="<?= base_url('/keranjang') ?>">Keranjang</a>
    </div>
  </div>
</nav>

<div class="container mt-4">