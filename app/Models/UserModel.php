<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_perusahaan', 'nama_pengirim', 'judul', 'isi', 'waktu_kirim'];
}
