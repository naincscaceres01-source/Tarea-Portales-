<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Paraíso Real</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-blue: #0f2537;
            --gold-accent: #c5a059;
            --beige-bg: #fdfbf7;
        }
        body {
            background-color: var(--beige-bg);
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: var(--primary-blue);
        }
        .hero-hotel {
            background: linear-gradient(rgba(15, 37, 55, 0.75), rgba(15, 37, 55, 0.75)), 
                        url('https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1200&q=80') center/cover;
        }
        .is-gold {
            background-color: var(--gold-accent) !important;
            color: #ffffff !important;
        }
        .is-dark-blue {
            background-color: var(--primary-blue) !important;
            color: #ffffff !important;
        }
        .text-gold {
            color: var(--gold-accent) !important;
        }
        
        /* Asegura que los textos descriptivos sobre cada campo del formulario sean azul oscuro */
        label.label {
            color: var(--primary-blue) !important;
            font-weight: 600;
        }

        #servicios p, #servicios h3 {
            color: var(--primary-blue) !important;
        }
    </style>
</head>
<body>

    <nav class="navbar is-dark-blue" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item has-text-weight-bold is-size-4 text-gold" href="#">
                    Hotel Paraíso Real
                </a>
            </div>

            <div class="navbar-menu is-active">
                <div class="navbar-end">
                    <a class="navbar-item has-text-white" href="#inicio">Inicio</a>
                    <a class="navbar-item has-text-white" href="#habitaciones">Habitaciones</a>
                    <a class="navbar-item has-text-white" href="#servicios">Servicios</a>
                    <a class="navbar-item has-text-white" href="#galeria">Galería</a>
                    <a class="navbar-item has-text-white" href="#reservas">Reservas</a>
                    <a class="navbar-item has-text-white" href="#contacto">Contacto</a>
                    <a class="navbar-item button is-gold is-small mt-2 ml-3" href="/admin" target="_blank">Panel Admin</a>
                </div>
            </div>
        </div>
    </nav>

    <section id="inicio" class="hero is-medium hero-hotel">
        <div class="hero-body has-text-centered">
            <div class="container">
                <h1 class="title is-1 has-text-white">Tu descanso comienza aquí</h1>
                <p class="subtitle is-4 has-text-light mt-2">Elegancia, confort y exclusividad en un solo lugar.</p>
                <a href="#habitaciones" class="button is-gold is-medium has-text-weight-bold mt-4">
                    Consultar habitaciones
                </a>
            </div>
        </div>
    </section>

    @if(session('success'))
        <div class="container mt-5">
            <div class="notification is-success has-text-centered">
                <button class="delete" onclick="this.parentElement.style.display='none';"></button>
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if ($errors->any())
        <div class="container mt-5">
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <section id="habitaciones" class="section">
        <div class="container">
            <h2 class="title is-2 has-text-centered mb-6" style="color: var(--primary-blue);">Nuestras Habitaciones</h2>
            
            <div class="columns is-multiline">
                @forelse($habitaciones as $item)
                    <div class="column is-3">
                        <div class="card" style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                        <img src="{{ $item->imagen }}" alt="{{ $item->nombre }}">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <p class="title is-5 mb-1">{{ $item->nombre }}</p>
                                    <p class="subtitle is-6 mb-3"><i class="fas fa-users"></i> {{ $item->capacidad }}</p>
                                    <div class="content">
                                        <p>{{ $item->descripcion }}</p>
                                        <p class="title is-5 text-gold mt-2">${{ number_format($item->precio, 2) }} <span class="is-size-7" style="color: #666;">/ noche</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 pt-0">
                                <a href="#reservas" class="button is-dark-blue is-fullwidth">Reservar Ahora</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="column is-12 has-text-centered">
                        <p class="is-size-5" style="color: var(--primary-blue);">No hay habitaciones registradas o disponibles por el momento.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="servicios" class="section has-background-white">
        <div class="container">
            <h2 class="title is-2 has-text-centered mb-6" style="color: var(--primary-blue);">Nuestros Servicios</h2>
            <div class="columns has-text-centered">
                <div class="column">
                    <i class="fas fa-wifi fa-3x text-gold mb-3"></i>
                    <h3 class="title is-5">Wi-Fi de Alta Velocidad</h3>
                    <p>Acceso a internet inalámbrico en habitaciones y áreas comunes.</p>
                </div>
                <div class="column">
                    <i class="fas fa-parking fa-3x text-gold mb-3"></i>
                    <h3 class="title is-5">Estacionamiento</h3>
                    <p>Parqueo privado con vigilancia y monitoreo las 24 horas.</p>
                </div>
                <div class="column">
                    <i class="fas fa-utensils fa-3x text-gold mb-3"></i>
                    <h3 class="title is-5">Restaurante Gourmet</h3>
                    <p>Gastronomía nacional e internacional a la carta.</p>
                </div>
                <div class="column">
                    <i class="fas fa-swimming-pool fa-3x text-gold mb-3"></i>
                    <h3 class="title is-5">Piscina & Bar</h3>
                    <p>Piscina al aire libre con barra de coctelería y bebidas.</p>
                </div>
                <div class="column">
                    <i class="fas fa-concierge-bell fa-3x text-gold mb-3"></i>
                    <h3 class="title is-5">Servicio a la Habitación</h3>
                    <p>Atención personalizada y pedidos directamente a tu puerta.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="galeria" class="section">
        <div class="container">
            <h2 class="title is-2 has-text-centered mb-6" style="color: var(--primary-blue);">Galería de Instalaciones</h2>
            <div class="columns is-multiline">
                <div class="column is-4">
                    <figure class="image is-4by3">
                        <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=600&q=80" alt="Instalación 1">
                    </figure>
                </div>
                <div class="column is-4">
                    <figure class="image is-4by3">
                        <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=600&q=80" alt="Instalación 2">
                    </figure>
                </div>
                <div class="column is-4">
                    <figure class="image is-4by3">
                        <img src="https://images.unsplash.com/photo-1584132967334-10e028bd69f7?auto=format&fit=crop&w=600&q=80" alt="Instalación 3">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section id="reservas" class="section">
        <div class="container">
            <div class="box p-6" style="background-color: #ffffff; border-top: 4px solid var(--gold-accent);">
                <h2 class="title is-3 has-text-centered mb-5" style="color: var(--primary-blue);">Formulario de Reserva</h2>
                
                <form action="{{ route('reservar') }}" method="POST">
                    @csrf
                    <div class="columns">
                        <div class="column is-4">
                            <div class="field">
                                <label class="label">Nombre Completo</label>
                                <div class="control">
                                    <input class="input" type="text" name="nombre_cliente" required placeholder="Ej. Axel Galo">
                                </div>
                            </div>
                        </div>
                        <div class="column is-4">
                            <div class="field">
                                <label class="label">Correo Electrónico</label>
                                <div class="control">
                                    <input class="input" type="email" name="correo_cliente" required placeholder="reservas@paraisoreal.example">
                                </div>
                            </div>
                        </div>
                        <div class="column is-4">
                            <div class="field">
                                <label class="label">Teléfono</label>
                                <div class="control">
                                    <input class="input" type="text" name="telefono_cliente" required placeholder="+504 9999-1004">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="column is-6">
                            <div class="field">
                                <label class="label">Fecha de Entrada</label>
                                <div class="control">
                                    <input class="input" type="date" name="fecha_entrada" required>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="field">
                                <label class="label">Fecha de Salida</label>
                                <div class="control">
                                    <input class="input" type="date" name="fecha_salida" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="column is-6">
                            <div class="field">
                                <label class="label">Habitación Seleccionada</label>
                                <div class="control select is-fullwidth">
                                    <select name="habitacion_id" required>
                                        @foreach($habitaciones as $hab)
                                            <option value="{{ $hab->id }}">{{ $hab->nombre }} - ${{ number_format($hab->precio, 2) }} / noche</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="field">
                                <label class="label">Número de Huéspedes</label>
                                <div class="control">
                                    <input class="input" type="number" min="1" max="10" value="1" name="huespedes" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field mt-4">
                        <div class="control">
                            <button class="button is-gold is-fullwidth has-text-weight-bold" type="submit">
                                Confirmar y Enviar Reserva
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer id="contacto" class="footer is-dark-blue has-text-white">
        <div class="container content has-text-centered">
            <h3 class="title is-4 text-gold mb-3">Hotel Paraíso Real</h3>
            <p class="mb-2"><strong>Teléfono:</strong> +504 9999-1004 | <strong>Correo:</strong> reservas@paraisoreal.example</p>
            <p class="mb-2"><strong>Dirección:</strong> Av. Principal de la Zona Hotelera, Honduras</p>
            <p class="mb-0"><strong>Horario de Recepción:</strong> Atendiendo las 24 horas al día, los 7 días de la semana.</p>
        </div>
    </footer>

</body>
</html>