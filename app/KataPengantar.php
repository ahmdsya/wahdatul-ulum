<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KataPengantar extends Model
{
    protected $fillable = ['judul', 'isi', 'foto', 'tokoh', 'jabatan', 'deskripsi'];
}
