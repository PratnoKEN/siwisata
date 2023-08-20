<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        // Check if the form was submitted
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $userModel = new UserModel();
            $user = $userModel->where('username', $username)->orWhere('email', $username)->first();

            if ($user && password_verify($password, $user['password'])) {
                session()->set('logged_in', true);
                session()->set('username', $user['username']);
                session()->set('level', $user['level']);

                // Redirect based on user level
                if ($user['level'] === 'admin') {
                    return redirect()->to('/dashboard');
                } else {
                    return redirect()->to('');
                }
            } else {
                // Set an error flash message
                session()->setFlashdata('error', 'Username/Email or Password Incorrect');

                // Redirect back to the login page
                return redirect()->to('/login');
            }
        }

        // Load the login view
        return view('admin/auth/login');
    }

    public function logout()
    {
        // Clear session and log user out
        session()->destroy();

        // Redirect to the login page
        return redirect()->to('');
    }
}