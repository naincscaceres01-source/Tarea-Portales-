<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $fillable = ['nombre', 'capacidad', 'precio', 'descripcion', 'imagen', 'disponible'];

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}