<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $fillable = ['judul', 'deskripsi', 'logo', 'favicon'];
}
