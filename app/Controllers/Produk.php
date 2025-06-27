<?php
namespace App\Controllers;
use App\Models\ProdukModel;

class Produk extends BaseController {
    public function index() {
        $model = new ProdukModel();
        $data['produk'] = $model->findAll();
        return view('produk/index', $data);
    }

    public function create() {
        return view('produk/create');
    }

    public function store() {
        $file = $this->request->getFile('foto');
        $namaFile = $file->getRandomName();
        $file->move('uploads/', $namaFile);

        $model = new ProdukModel();
        $model->save([
            'nama'   => $this->request->getPost('nama'),
            'merk'   => $this->request->getPost('merk'),
            'tahun'  => $this->request->getPost('tahun'),
            'harga'  => $this->request->getPost('harga'),
            'foto'   => $namaFile
        ]);

        return redirect()->to('/produk');
    }

    public function kosongkan()
    {
    $model = new \App\Models\ProdukModel();
    $model->truncate();

    return redirect()->to('/produk')->with('success', 'Semua mobil berhasil dihapus.');
    }

    public function edit($id)
    {
    $model = new ProdukModel();
    $data['produk'] = $model->find($id);
    return view('produk/edit', $data);
    }

    public function update($id)
    {
    $model = new ProdukModel();

    $data = [
        'id' => $id,
        'nama' => $this->request->getPost('nama'),
        'harga' => $this->request->getPost('harga'),
    ];

    // jika upload file baru
    $file = $this->request->getFile('foto');
    if ($file && $file->isValid() && !$file->hasMoved()) {
        $namaFile = $file->getRandomName();
        $file->move('uploads/', $namaFile);
        $data['foto'] = $namaFile;
    }

    $model->save($data);
    return redirect()->to('/produk');
    }

    public function hapus($id)
    {
    $model = new ProdukModel();
    $model->delete($id);
    return redirect()->to('/produk');
    }

}
