<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perawi extends Model
{
    protected $table = 'perawi';
    protected $fillable = ['nama_perawi'];

    public function hadists()
    {
        return $this->hasMany(Hadist::class);
    }

    public function buku()
    {
        return $this->hasMany(Buku::class);
    }
}
