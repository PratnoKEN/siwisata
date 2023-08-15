<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class HotelController extends BaseController
{
    public function index()
    {
        // Check if user is logged in
        if (!session()->get('logged_in')) {
            // Redirect to the login page if not logged in
            return redirect()->to('/login');
        }
        $data = [
            'title' => 'Daftar Hotel'
        ];
        return view('admin/hotel/index', $data);
    }

    public function add()
    {
        // Check if user is logged in
        if (!session()->get('logged_in')) {
            // Redirect to the login page if not logged in
            return redirect()->to('/login');
        }
        $data = [
            'title' => 'Tambah Hotel'
        ];
        return view('admin/hotel/add', $data);
    }
}