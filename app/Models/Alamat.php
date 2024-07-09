<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    protected $table = 'alamat';
    protected $primaryKey ='id_alamat';

    protected $fillable = [
        'idUser',
        'alamat_lengkap',
        'rt',
        'rw',
        'kelurahan',
        'kabupaten',
        'kecamatan',
        'provinsi',
    ];

    public function user()
    {
        return $this->belongsTo(UserRegisterr::class, 'idUser');
    }

}
