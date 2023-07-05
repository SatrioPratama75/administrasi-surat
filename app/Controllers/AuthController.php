<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $userModel = new UserModel();

        // Ambil inputan dari form
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Cek apakah inputan merupakan admin
        if ($email === 'admin@gmail.com' && $password === 'admin123') {
            // Jika admin, redirect ke halaman utama admin
            return redirect()->to(base_url('admin/home'));
        } else{
            return redirect()->to(base_url('user/home'));
        }
    }
}
