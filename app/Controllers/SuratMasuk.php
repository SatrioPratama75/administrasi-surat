<?php

namespace App\Controllers;

use App\Models\SuratBalasanModel;

class SuratMasuk extends BaseController
{
    public function index()
    {
        // Ambil email pengguna yang sedang login
        $email = session()->get('email_penerima');

        // Buat instance model SuratBalasanModel
        $SuratBalasanModel = new SuratBalasanModel();

        // Ambil data surat masuk berdasarkan email penerima
        $suratMasuk = $SuratBalasanModel->getSuratMasukByPenerima($email);

        // Kirim data surat masuk ke view
        $data['/user/surat_masuk'] = $suratMasuk;

        return view('/user/surat_masuk', $data);
    }
}
