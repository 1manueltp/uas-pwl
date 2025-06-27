<?php
namespace App\Controllers;
use App\Models\ProdukModel;

class Home extends BaseController {
    public function index() {
        $model = new ProdukModel();
        $data['produk'] = $model->findAll();
        return view('home', $data);
    }
}
