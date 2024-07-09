<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class UserRegisterr extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'newusers';

    protected $fillable = [
        'username',
        'nama_lengkap',
        'email',
        'no_telepon',
        'password',
        'tgl_lahir',
    ];

    protected $hidden = [
        'password',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function getAuthIdentifierName()
    {
        return 'username';
    }
}