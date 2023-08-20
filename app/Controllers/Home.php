<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HotelModel;
use App\Models\ProdukModel;
use App\Models\TransportasiModel;

class Home extends BaseController
{
    public function index()
    {

        $produkModel = new ProdukModel();
        $HotelModel = new HotelModel();
        $TransportasiModel = new TransportasiModel();

        $data = [
            'title' => 'Daftar Produk',
            'produk' => $produkModel->getAllProduk(),
            'hotel' => $HotelModel->getAllHotel(),
            'transport' => $TransportasiModel->getAllTransportasi(),
        ];
        return view('welcome_message', $data);
    }
}