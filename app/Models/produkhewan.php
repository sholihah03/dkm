<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produkhewan extends Model
{
    use HasFactory;
    protected $table = 'produkhewan';
    protected $fillable = [
        'name',
        'price',
        'image',
    ];
}
