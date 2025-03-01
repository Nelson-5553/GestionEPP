<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Area extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'sede_id'];

    public function sede()
    {
        return $this->belongsTo(Sede::class, 'sede_id');
    }
}
