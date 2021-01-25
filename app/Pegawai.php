<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Pegawai extends Model
{
    use SoftDeletes;

    protected $table = 'pegawais';
    protected $fillable = ['nama', 'alamat'];
    protected $dates = ['deleted_at'];
}
