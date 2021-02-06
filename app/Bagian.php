<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{
    protected $fillable = ['bagian', 'judul', 'deskripsi'];
}
