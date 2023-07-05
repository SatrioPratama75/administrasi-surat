<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin/home');
    }
}
