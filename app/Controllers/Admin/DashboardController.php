<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        // Check if user is logged in
        if (!session()->get('logged_in')) {
            // Redirect to the login page if not logged in
            return redirect()->to('/login');
        }

        $data = [
            'title' => 'Dashboard'
        ];

        return view('admin/dashboard/index', $data);
    }
}