<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SuratBalasanModel;

class SuratKeluarController extends BaseController
{
    public function index()
    {
        return view('admin/surat_keluar');
    }

    public function kirimBalasan()
    {
        // Ambil data dari form input
        $nama_perusahaan = $this->request->getPost('nama_perusahaan');
        $nama_pengirim = $this->request->getPost('nama_pengirim');
        $judul = $this->request->getPost('judul');
        $isi = $this->request->getPost('isi');
        $email_penerima = $this->request->getPost('email_penerima'); // Pastikan nama input sesuai dengan formulir

        // Validasi data jika diperlukan

        // Simpan data ke database
        $SuratBalasanModel = new SuratBalasanModel();
        $SuratBalasanModel->save([
            'nama_perusahaan' => $nama_perusahaan,
            'nama_pengirim' => $nama_pengirim,
            'judul' => $judul,
            'isi' => $isi,
            'email_penerima' => $email_penerima,
            'waktu_kirim' => date('Y-m-d H:i:s'), // Tambahkan waktu kirim saat ini
        ]);

        return redirect()->to('/admin/surat-keluar');
    }
    public function balasan_surat()
    {
        // Ambil email pengguna yang sedang login
        $email = session()->get('email');

        // Query untuk mengambil balasan surat dari database
        $SuratBalasanModel = new SuratBalasanModel();
        $balasanSurat = $SuratBalasanModel->where('email_penerima', $email)->findAll();

        // Tampilkan halaman dengan data balasan surat
        return view('user/balasan_surat', ['balasanSurat' => $balasanSurat]);
    }
}
