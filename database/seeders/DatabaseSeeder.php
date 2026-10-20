<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Habitacion;

class HotelSeeder extends Seeder
{
    public function run(): void
    {
        Habitacion::create([
            'nombre' => 'Habitación Sencilla',
            'capacidad' => '1 Persona',
            'precio' => 80.00,
            'descripcion' => 'Agradable y confortable espacio equipado con cama individual, Wi-Fi de alta velocidad y escritorio.',
            'imagen' => 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?auto=format&fit=crop&w=500&q=80',
            'disponible' => true,
        ]);

        Habitacion::create([
            'nombre' => 'Habitación Doble',
            'capacidad' => '2 Personas',
            'precio' => 120.00,
            'descripcion' => 'Espaciosa habitación con cama Queen, baño privado, minibar y vista panorámica a los jardines.',
            'imagen' => 'https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=500&q=80',
            'disponible' => true,
        ]);

        Habitacion::create([
            'nombre' => 'Habitación Familiar',
            'capacidad' => '4 Personas',
            'precio' => 180.00,
            'descripcion' => 'Cuenta con dos camas matrimoniales, área de estar, Smart TV y todas las comodidades para la familia.',
            'imagen' => 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?auto=format&fit=crop&w=500&q=80',
            'disponible' => true,
        ]);

        Habitacion::create([
            'nombre' => 'Suite Presidencial',
            'capacidad' => '2 Personas',
            'precio' => 250.00,
            'descripcion' => 'Máximo lujo con jacuzzi privado, balcón, cama King Size y servicio preferencial.',
            'imagen' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=500&q=80',
            'disponible' => true,
        ]);
    }
}