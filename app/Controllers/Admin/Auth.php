<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function login()
    {
        // Check if the form was submitted
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Define valid username and password
            $validUsername = 'Hanafi';
            $validPassword = '123';

            // Check if the entered credentials match the valid values
            if ($username === $validUsername && $password === $validPassword) {
                session()->set('logged_in', true);
                // After successful authentication
                session()->set('username', $validUsername); // Assuming $validUsername is the username

                return redirect()->to('/dashboard'); // Redirect to the dashboard or another page
            } else {
                // Set an error flash message
                session()->setFlashdata('error', 'Username/Password Salah');

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
        return redirect()->to('/login');
    }
}