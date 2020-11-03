<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $fillable = ['id', 'user_id', 'nama', 'email', 'telepon', 'alamat'];
    // protected $guarded = ['id'];
}
