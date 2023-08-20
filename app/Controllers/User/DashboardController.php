<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\ProdukModel;
use App\Models\HotelModel;
use App\Models\TransportasiModel;

class DashboardController extends BaseController
{
    public function index()
    {
        // Check if user is logged in and has admin role
        if (!session()->get('logged_in') || session('level') !== 'user') {
            // Show a "Page Not Found" error
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $HotelModel = new HotelModel();
        $produkModel = new ProdukModel();
        $TransportasiModel = new TransportasiModel();

        $data = [
            'title' => 'Dashboard',
            'wisataCount' => $produkModel->countAllResults(),
            'HotelCount' => $HotelModel->countAllResults(),
            'transportasiCount' => $TransportasiModel->countAllResults(),

        ];

        return view('user/dashboard/index', $data);
    }
}