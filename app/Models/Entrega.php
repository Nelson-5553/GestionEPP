<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
    protected $fillable = [
        'solicitud_id',
        'start_date_labor',
        'end_date_labor',
        'observations',
        'created_at',
        'updated_at'
    ];
}
