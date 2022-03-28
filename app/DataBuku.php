<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataBuku extends Model
{
    protected $table ='data_bukus';

    protected $fillable = [
        'judul',
        'pengarang',
        'penerbit',
        'tahun_terbit',
        'jumlah_buku',
        'deskripsi',
    ];

    public function anggota(){
        return $this->belongsTo('app\anggota', 'id_buku');
    }
}
