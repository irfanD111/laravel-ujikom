<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class admin extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'AdminID',   
        'username',
        'password',
        'nama_lengkap',
];
    protected $table="admin";
}
