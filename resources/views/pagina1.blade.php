<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zonas Azules - Fusagasugá</title>
    
    <!-- Link al archivo de estilos CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Zonas Azules - Fusagasugá</title>
        
        <!-- Link a los estilos CSS usando Vite -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])  <!-- Carga tu archivo CSS y JS aquí -->
        
        <!-- Fuentes de Google y librería de iconos -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
    <!-- Fuentes de Google y librería de iconos -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body>
    <header class="header">
        <h1>Zonas Azules Fusagasugá aaa</h1>
        <nav class="nav">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#info">Proyecto</a></li>
                <li><a href="#contact">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <img src="{{ asset('images/zonas_azules_hero.jpg') }}" alt="Imagen principal Zonas Azules" class="hero-img">

        <div class="hero-text">
            <h2>Optimización de espacios en Fusagasugá</h2>
            <p>Conoce cómo nuestras zonas azules están mejorando la movilidad en la ciudad.</p>
        </div>
    </section>

    <section class="info" id="info">
        <h2>¿Qué son las Zonas Azules?</h2>
        <p>Las Zonas Azules son áreas destinadas para el estacionamiento temporal, buscando mejorar la movilidad y el uso eficiente de los espacios públicos en Fusagasugá.</p>
        <div class="features">
            <div class="feature">
                <i class="fas fa-parking"></i>
                <h3>Estacionamiento Seguro</h3>
                <p>Encuentra puntos de estacionamiento seguros y bien ubicados.</p>
            </div>
            <div class="feature">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Localización Estratégica</h3>
                <p>Zonas ubicadas en puntos clave para mayor accesibilidad.</p>
            </div>
            <div class="feature">
                <i class="fas fa-clock"></i>
                <h3>Acceso Temporal</h3>
                <p>Estacionamiento por periodos definidos para mayor rotación.</p>
            </div>
        </div>
    </section>

    <section class="gallery">
        <h2>Galería</h2>
        <div class="gallery-container">
            <img src="{{ asset('images/zonas_azules_1.jpg') }}" alt="Zona Azul 1" class="gallery-img">
            <img src="{{ asset('images/zonas_azules_2.jpg') }}" alt="Zona Azul 2" class="gallery-img">
            <img src="{{ asset('images/zonas_azules_3.jpg') }}" alt="Zona Azul 3" class="gallery-img">
        </div>
    </section>

    <section class="contact" id="contact">
        <h2>Contacto</h2>
        <p>¿Tienes dudas? Contáctanos a través de nuestros canales oficiales.</p>
        <ul>
            <li><i class="fas fa-envelope"></i> contacto@zonasazules.com</li>
            <li><i class="fas fa-phone-alt"></i> +57 123 456 7890</li>
        </ul>
    </section>

    <footer>
        <p>&copy; 2024 Zonas Azules Fusagasugá. Todos los derechos reservados.</p>
    </footer>
</body>
</html>