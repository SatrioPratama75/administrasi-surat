<?php

namespace App\Controllers;

use App\Models\SuratModel;
use CodeIgniter\Controller;

class UserController extends Controller
{   
    public function home()
    {
        return view('user/home');
    }
    public function kirimSurat()
    {
        $suratModel = new SuratModel();

        if ($this->request->getMethod() === 'post') {
            // Validasi input pengiriman surat
            $rules = [
                'nama_perusahaan' => 'required',
                'nama_pengirim' => 'required',
                'judul' => 'required',
                'isi' => 'required',
            ];

            if ($this->validate($rules)) {
                // Simpan surat ke database
                $suratModel->insert([
                    'nama_perusahaan' => $this->request->getPost('nama_perusahaan'),
                    'nama_pengirim' =>  $this->request->getPost('nama_pengirim'),
                    'judul' => $this->request->getPost('judul'),
                    'isi' => $this->request->getPost('isi'),
                    'waktu_kirim' => date('Y-m-d H:i:s'),
                ]);

                // Redirect ke halaman sukses
                return redirect()->to(base_url('user/sukses'));
            } else {
                // Tampilkan pesan validasi jika ada
                $validation = \Config\Services::validation();
                return redirect()->back()->withInput()->with('errors', $validation->getErrors());
            }
        }

        return view('user/kirim_surat');
    }

    public function sukses()
    {
        return view('user/sukses');
    }
}
