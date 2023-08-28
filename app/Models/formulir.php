<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    protected $primaryKey = 'no_daftar';
    protected $keyType = 'string';
    protected $table = "formulir";

    protected $fillable = [
        'no_daftar',
        'id_periode',
        'id_user',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'telp',
        'program_studi'

    ];
    public function periode()
    {
        return $this->belongsTo(
            Periode::class,
            "id_periode",
            "id"
        );
    }  
    
    public function user()
    {
        return $this->belongsTo(
            User::class,
            "id_user",
            "id"
        );
    }

    public function programStudi()
    {
        return $this->belongsTo(
            SiakadProgramStudi::class,
            "program_studi",
            "kode_prodi"
        );
    }
}