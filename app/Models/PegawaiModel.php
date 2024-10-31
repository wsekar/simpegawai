<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PegawaiModel extends Model
{
    protected $table = 'pegawai';
    protected $fillable = [
        'nip',
        'nama_pegawai',
        'tanggal_lahir_pegawai',
        'alamat_pegawai',
        'jenis_kelamin',
        'pendidikan_id',
        'jabatan_id',
    ];

    
    public function pendidikan()
    {
        return $this->belongsTo(PendidikanModel::class);
    }
    public function jabatan()
    {
        return $this->belongsTo(JabatanModel::class);
    }

    
}
