<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    protected $table = 'tb_riwayat';

    protected $fillable = [
        'nama',
        'user_id',
        'hasil_diagnosa',
        'gejala_terpilih',
        'cf_max',
        'hasil_penyakit',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
}
