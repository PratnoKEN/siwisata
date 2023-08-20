<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Home extends BaseController
{

    public function index()
    {
        $produkModel = new ProdukModel(); // Create an instance of the model
        $data = [
            'title' => 'Daftar Produk',
            'produk' => $produkModel->getAllProduk(),
        ];
        return view('welcome_message', $data);
    }
}
