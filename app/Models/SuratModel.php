<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratModel extends Model
{
    protected $table = 'surat';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_perusahaan', 'nama_pengirim', 'judul', 'isi', 'waktu_kirim'];
}
