<?php
namespace App\Models;

use CodeIgniter\Model;

class SuratBalasanModel extends Model
{
    protected $table = 'surat_user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_perusahaan', 'nama_pengirim', 'judul', 'isi', 'waktu_kirim', 'email_penerima'];
    public function getSuratMasukByPenerima($email)
    {
        return $this->where('email_penerima', $email)->findAll();
    }
    
}
