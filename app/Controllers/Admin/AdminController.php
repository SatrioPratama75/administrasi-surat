<?php
// app/Controllers/Admin/AdminController.php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SuratModel;

class AdminController extends BaseController
{
    public function suratMasuk()
    {
        $suratModel = new SuratModel();
        $suratMasuk = $suratModel->findAll();

        $data = [
            'suratMasuk' => $suratMasuk
        ];

        return view('admin/surat_masuk', $data);
    }
    // app/Controllers/Admin/AdminController.php

    public function suratKeluar()
    {
        return view('admin/surat_keluar');
    }
    // app/Controllers/Admin/AdminController.php

public function kirimBalasan()
{
    $suratModel = new SuratModel();

    $data = [
        'nama_perusahaan' => $this->request->getPost('nama_perusahaan'),
        'nama_pengirim' => $this->request->getPost('nama_pengirim'),
        'judul' => $this->request->getPost('judul'),
        'isi' => $this->request->getPost('isi'),
        'waktu_kirim' => date('Y-m-d H:i:s')
    ];

    $suratModel->insert($data);

    // Redirect ke halaman Surat Masuk setelah pengiriman surat balasan
    return redirect()->to('/admin/surat-masuk');
}

}
