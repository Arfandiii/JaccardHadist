<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $fillable = ['judul', 'penerbit', 'pengarang', 'tahun_terbit', 'stock','photo', 'perawi_id'];

    public function perawi()
    {
        return $this->belongsTo(Perawi::class);
    }
}
