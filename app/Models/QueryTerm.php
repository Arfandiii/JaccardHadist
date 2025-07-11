<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QueryTerm extends Model
{
    use HasFactory;
    protected $table = 'query_terms';
    protected $guarded = ['id'];

    public function getQuery()
    {
        return $this->belongsTo(Query::class);
    }
}
