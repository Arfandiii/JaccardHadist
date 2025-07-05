<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hadist extends Model
{
    protected $fillable = ['no_hadist', 'isi_hadist', 'kitab_id', 'perawi_id'];

    public function kitab()
    {
        return $this->belongsTo(Kitab::class);
    }

    public function perawi()
    {
        return $this->belongsTo(Perawi::class);
    }
}
