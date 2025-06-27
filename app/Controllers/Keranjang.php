<?php
namespace App\Controllers;
use App\Models\ProdukModel;
use App\Models\KeranjangModel;
use Dompdf\Dompdf;
use Dompdf\Options;

class Keranjang extends BaseController {
    public function index() {
        $model = new KeranjangModel();
        $data['keranjang'] = $model->findAll();
        return view('keranjang/index', $data);
    }

    public function tambah($id) {
        $produk = (new ProdukModel())->find($id);

        $model = new KeranjangModel();
        $model->save([
            'id_produk' => $produk['id'],
            'nama' => $produk['nama'],
            'harga' => $produk['harga'],
            'jumlah' => 1,
            'subtotal' => $produk['harga'],
            'foto' => $produk['foto']
        ]);

        return redirect()->to('/keranjang');
    }

    public function hapus($id) {
        (new KeranjangModel())->delete($id);
        return redirect()->to('/keranjang');
    }

    public function kosongkan() {
        (new KeranjangModel())->truncate();
        return redirect()->to('/keranjang');
    }

    public function cetak_invoice()
    {
    $cart = (new KeranjangModel())->findAll();

    if (empty($cart)) {
        return redirect()->to('/keranjang')->with('error', 'Keranjang kosong.');
    }

    $data = [
        'keranjang' => $cart,
        'total' => array_sum(array_column($cart, 'subtotal')),
        'tanggal' => date('Y-m-d H:i:s')
    ];

    // Load view ke HTML string
    $html = view('invoice_view', $data);

    // Konfigurasi DomPDF
    $options = new \Dompdf\Options();
    $options->set('isRemoteEnabled', true);
    $dompdf = new \Dompdf\Dompdf($options);

    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    // Tampilkan di tab baru
    $dompdf->stream("invoice-" . date('YmdHis') . ".pdf", ['Attachment' => false]);
    }
}
