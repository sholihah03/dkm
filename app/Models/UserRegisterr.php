<?php

// app/Models/UserRegisterr.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class UserRegisterr extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'newusers'; // Nama tabel sesuai dengan kebutuhan
    protected $primaryKey ='idUser'; // Primary key yang digunakan

    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function getAuthIdentifierName()
    {
        return 'username'; // Kolom yang digunakan untuk autentikasi
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
