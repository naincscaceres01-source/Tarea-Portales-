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
            font-family: sans-serif;
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
    </style>
</head>
<body>

    <!-- NAVBAR (Menú de navegación) -->
    <nav class="navbar is-dark-blue" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item has-text-weight-bold is-size-4 text-gold" href="#">
                    🏨 Hotel Paraíso Real
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
                </div>
            </div>
        </div>
    </nav>

    <section id="inicio" class="hero is-medium hero-hotel">
        <div class="hero-body has-text-centered">
            <div class="container">
                <h1 class="title is-1 has-text-white">Tu descanso comienza aquí</h1>
                <p class="subtitle is-4 has-text-light mt-2">Elegancia, lujo y tranquilidad en un solo lugar.</p>
                <a href="#habitaciones" class="button is-gold is-medium has-text-weight-bold mt-4">
                    Consultar habitaciones
                </a>
            </div>
        </div>
    </section>

    <section id="habitaciones" class="section">
        <div class="container">
            <h2 class="title is-2 has-text-centered mb-6" style="color: var(--primary-blue);">Nuestras Habitaciones</h2>
            
            <div class="columns is-multiline">
                <div class="column is-3">
                    <div class="card" style="height: 100%;">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?auto=format&fit=crop&w=500&q=80" alt="Habitación Sencilla">
                            </figure>
                        </div>
                        <div class="card-content">
                            <p class="title is-5 mb-1">Habitación Sencilla</p>
                            <p class="subtitle is-6 has-text-grey mb-3"><i class="fas fa-user"></i> Capacidad: 1 persona</p>
                            <div class="content">
                                Confortable espacio equipado con cama individual, Wi-Fi de alta velocidad y escritorio.
                                <p class="title is-5 text-gold mt-2">$80.00 <span class="is-size-7 has-text-grey">/ noche</span></p>
                            </div>
                            <a href="#reservas" class="button is-dark-blue is-fullwidth">Reservar</a>
                        </div>
                    </div>
                </div>

                <div class="column is-3">
                    <div class="card" style="height: 100%;">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=500&q=80" alt="Habitación Doble">
                            </figure>
                        </div>
                        <div class="card-content">
                            <p class="title is-5 mb-1">Habitación Doble</p>
                            <p class="subtitle is-6 has-text-grey mb-3"><i class="fas fa-users"></i> Capacidad: 2 personas</p>
                            <div class="content">
                                Espaciosa habitación con cama Queen, baño privado, minibar y vista panorámica.
                                <p class="title is-5 text-gold mt-2">$120.00 <span class="is-size-7 has-text-grey">/ noche</span></p>
                            </div>
                            <a href="#reservas" class="button is-dark-blue is-fullwidth">Reservar</a>
                        </div>
                    </div>
                </div>

                <!-- Habitación Familiar -->
                <div class="column is-3">
                    <div class="card" style="height: 100%;">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?auto=format&fit=crop&w=500&q=80" alt="Habitación Familiar">
                            </figure>
                        </div>
                        <div class="card-content">
                            <p class="title is-5 mb-1">Habitación Familiar</p>
                            <p class="subtitle is-6 has-text-grey mb-3"><i class="fas fa-users"></i> Capacidad: 4 personas</p>
                            <div class="content">
                                Dos camas matrimoniales, área de estar, Smart TV y todas las comodidades para la familia.
                                <p class="title is-5 text-gold mt-2">$180.00 <span class="is-size-7 has-text-grey">/ noche</span></p>
                            </div>
                            <a href="#reservas" class="button is-dark-blue is-fullwidth">Reservar</a>
                        </div>
                    </div>
                </div>

                <div class="column is-3">
                    <div class="card" style="height: 100%;">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=500&q=80" alt="Suite Presidencial">
                            </figure>
                        </div>
                        <div class="card-content">
                            <p class="title is-5 mb-1">Suite Presidencial</p>
                            <p class="subtitle is-6 has-text-grey mb-3"><i class="fas fa-crown"></i> Capacidad: 2 personas</p>
                            <div class="content">
                                Máximo lujo con jacuzzi privado, balcón, cama King Size y atención personalizada.
                                <p class="title is-5 text-gold mt-2">$250.00 <span class="is-size-7 has-text-grey">/ noche</span></p>
                            </div>
                            <a href="#reservas" class="button is-dark-blue is-fullwidth">Reservar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios" class="section has-background-white">
        <div class="container">
            <h2 class="title is-2 has-text-centered mb-6" style="color: var(--primary-blue);">Servicios del Hotel</h2>
            <div class="columns has-text-centered">
                <div class="column">
                    <i class="fas fa-wifi fa-3x text-gold mb-3"></i>
                    <h3 class="title is-5">Wi-Fi de Alta Velocidad</h3>
                    <p>Acceso a internet en habitaciones y áreas comunes.</p>
                </div>
                <div class="column">
                    <i class="fas fa-parking fa-3x text-gold mb-3"></i>
                    <h3 class="title is-5">Estacionamiento</h3>
                    <p>Parqueo privado y seguro 24/7 para nuestros huéspedes.</p>
                </div>
                <div class="column">
                    <i class="fas fa-utensils fa-3x text-gold mb-3"></i>
                    <h3 class="title is-5">Restaurante</h3>
                    <p>Gastronomía nacional e internacional a la carta.</p>
                </div>
                <div class="column">
                    <i class="fas fa-swimming-pool fa-3x text-gold mb-3"></i>
                    <h3 class="title is-5">Piscina & Bar</h3>
                    <p>Área de relajación al aire libre con coctelería.</p>
                </div>
                <div class="column">
                    <i class="fas fa-concierge-bell fa-3x text-gold mb-3"></i>
                    <h3 class="title is-5">Servicio a la Habitación</h3>
                    <p>Atención disponible durante todo el día.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- GALERÍA -->
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
                
                <form action="#" method="GET" onsubmit="event.preventDefault(); alert('¡Solicitud enviada correctamente!');">
                    <div class="columns">
                        <div class="column is-6">
                            <div class="field">
                                <label class="label">Fecha de Entrada</label>
                                <div class="control">
                                    <input class="input" type="date" required>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="field">
                                <label class="label">Fecha de Salida</label>
                                <div class="control">
                                    <input class="input" type="date" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="column is-6">
                            <div class="field">
                                <label class="label">Tipo de Habitación</label>
                                <div class="control select is-fullwidth">
                                    <select>
                                        <option>Habitación Sencilla</option>
                                        <option>Habitación Doble</option>
                                        <option>Habitación Familiar</option>
                                        <option>Suite Presidencial</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="field">
                                <label class="label">Número de Huéspedes</label>
                                <div class="control">
                                    <input class="input" type="number" min="1" max="10" value="1" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="field mt-4">
                        <div class="control">
                            <button class="button is-gold is-fullwidth has-text-weight-bold" type="submit">
                                Consultar Disponibilidad / Reservar
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
            <p class="mb-2"><strong>Dirección:</strong> Av. Principal de la Zona Costera, Honduras</p>
            <p class="mb-0"><strong>Horario de Recepción:</strong> Atendiendo 24 horas al día, los 7 días de la semana.</p>
        </div>
    </footer>

</body>
</html>