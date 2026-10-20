<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;
use App\Models\Reserva;

class HotelController extends Controller
{
    public function index()
    {
        // 1. Obtiene de la base de datos solo las habitaciones disponibles
        $habitaciones = Habitacion::where('disponible', true)->get();

        // 2. Envía la colección de habitaciones a la vista index
        return view('index', compact('habitaciones'));
    }

    public function reservar(Request $request)
    {
        // 1. Valida los datos recibidos desde el formulario web
        $request->validate([
            'nombre_cliente' => 'required|string|max:255',
            'correo_cliente' => 'required|email|max:255',
            'telefono_cliente' => 'required|string|max:50',
            'fecha_entrada' => 'required|date',
            'fecha_salida' => 'required|date|after_or_equal:fecha_entrada',
            'huespedes' => 'required|integer|min:1',
            'habitacion_id' => 'required|exists:habitacions,id',
        ]);

        // 2. Almacena la nueva reserva en la tabla 'reservas' de la BD
        Reserva::create($request->all());

        return back()->with('success', '¡Gracias! Su solicitud de reserva ha sido guardada exitosamente.');
    }
}