<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Invoice Pembelian</title>
    <style>
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            font-size: 12px;
            margin: 30px;
        }

        h2 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
        }

        .info {
            margin-bottom: 20px;
        }

        .info p {
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        table thead {
            background-color: #f8f8f8;
        }

        table th, table td {
            border: 1px solid #ccc;
            padding: 8px 10px;
            text-align: left;
        }

        table th {
            background-color: #333;
            color: white;
        }

        .total {
            font-weight: bold;
            background-color: #f0f0f0;
        }

        .footer {
            text-align: center;
            font-size: 11px;
            color: #777;
        }
    </style>
</head>
<body>

<h2>Invoice Pembelian</h2>

<div class="info">
    <p><strong>Tanggal:</strong> <?= $tanggal ?></p>
</div>

<table>
    <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($keranjang as $item): ?>
        <tr>
            <td><?= $item['nama'] ?></td>
            <td><?= number_format($item['harga'], 0, ',', '.') ?></td>
            <td><?= $item['jumlah'] ?></td>
            <td><?= number_format($item['subtotal'], 0, ',', '.') ?></td>
        </tr>
        <?php endforeach; ?>
        <tr class="total">
            <td colspan="3">Total</td>
            <td><?= number_format($total, 0, ',', '.') ?></td>
        </tr>
    </tbody>
</table>

<div class="footer">
    <p class="text-center mt-5" style="font-size: 1.1rem; font-style: italic; color: #555;">
    Merci pour votre confiance. <br>
    <strong>Roues d'Or</strong> berkomitmen untuk selalu memberikan pengalaman otomotif terbaik bagi Anda.  
    </p>
    <p class="text-center" style="color: #777;">
        Nikmati perjalanan penuh gaya dan kemewahan bersama kendaraan pilihan Anda.  
    <br>Vous êtes toujours le bienvenu.
    </p>
</div>

</body>
</html>
