<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'epp_id', 'sede_id', 'area_id', 'cantidad', 'state', 'aprobado_por_id'];


    public function user() {
        return $this->belongsTo(User::class); // (1 a 1)
    }

    // Una solicitud pertenece a un EPP
    public function epp() {
        return $this->belongsTo(Epp::class); // (1 a 1)
    }

    // Una solicitud pertenece a una sede
    public function sede() {
        return $this->belongsTo(Sede::class); // (1 a 1)
    }

    // Una solicitud pertenece a un área
    public function area() {
        return $this->belongsTo(Area::class); // (1 a 1)
    }

    // Una solicitud puede ser aprobada por un usuario (gerente o supervisor)
    public function aprobadoPor() {
        return $this->belongsTo(User::class, 'aprobado_por_id'); // (1 a 1)
    }

    public function entregas() {
        return $this->hasMany(Entrega::class);
    }
}
