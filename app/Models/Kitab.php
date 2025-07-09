<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kitab extends Model
{
    protected $table = 'kitab';
    protected $fillable = ['nama_kitab'];

    public function hadists()
    {
        return $this->hasMany(Hadist::class);
    }
}
