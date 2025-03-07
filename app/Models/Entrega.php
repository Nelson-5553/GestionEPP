<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entrega extends Model
{
    use HasFactory;

    protected $fillable = [
        'solicitud_id',
        'start_date_labor',
        'end_date_labor',
        'observations',
    ];

    // Relación correcta con Solicitud
    public function solicitud() {
        return $this->belongsTo(Solicitud::class);
    }
}
