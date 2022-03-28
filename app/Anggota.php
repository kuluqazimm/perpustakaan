<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';

    protected $fillable = [
        'nama', 
        'id_buku'
    ];
    public function data_bukus(){
        return $this->hasMany('app\DataBuku', 'id_buku');
    }
}
