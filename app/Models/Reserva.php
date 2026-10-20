<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'nombre_cliente', 
        'correo_cliente', 
        'telefono_cliente', 
        'fecha_entrada', 
        'fecha_salida', 
        'huespedes', 
        'habitacion_id', 
        'estado'
    ];

    public function habitacion()
    {
        return $this->belongsTo(Habitacion::class);
    }
}