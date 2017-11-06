<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    // protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    protected $fillable = ['nama','nip','id_jabatan','id_golongan','id_ruang',
            'tempat_lahir','tanggal_lahir','opd','gelar_depan','gelar_belakang'];
}
