namespace App\Controllers;
use App\Models\ProdukModel;
use App\Models\KeranjangModel;
use Dompdf/Dompdf;

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
            'id_produk' => $id,
            'nama' => $produk['nama'],
            'harga' => $produk['harga'],
            'jumlah' => 1,
            'subtotal' => $produk['harga']
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

    public function cetak_invoice() {
    $data['keranjang'] = (new KeranjangModel())->findAll();
    $data['total'] = array_sum(array_column($data['keranjang'], 'subtotal'));

    $dompdf = new Dompdf();
    $dompdf->loadHtml(view('keranjang/invoice', $data));
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream('invoice.pdf', ['Attachment' => false]);
    }
}
