<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Datagiat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'id_polres',
        'image',
        'tanggal',
        'keterangan',
    ];
    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = bcrypt($value);
    // }
}