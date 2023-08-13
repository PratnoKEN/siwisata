<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class BookingsController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Bookings'
        ];
        return view('admin/bookings/index', $data);
    }
}