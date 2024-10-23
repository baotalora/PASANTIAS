<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zonas Azules en Fusagasugá    2.0</title>
    <!-- Enlace a tu archivo CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Puedes agregar fuentes o íconos aquí, como FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header>
        <!-- Aquí puedes colocar un logo o una imagen de encabezado -->
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
        <h1>Zonas Azules en Fusagasugá</h1>
        <p>Conoce los espacios de parqueo disponibles en Fusagasugá</p>
    </header>

    <main>
        <section class="hero">
            <!-- Imagen principal o íconos de la ciudad -->
            <img src="{{ asset('images/hero_image.jpg') }}" alt="Zonas Azules" class="hero-img">
            <div class="hero-text">
                <h2>Encuentra tu zona de parqueo fácilmente</h2>
                <p>Consulta las zonas azules más cercanas, tarifas y disponibilidad.</p>
            </div>
        </section>

        <section class="info">
            <h2>¿Qué son las Zonas Azules?</h2>
            <p>Las zonas azules son espacios de parqueo regulados en la ciudad. Están diseñados para facilitar el estacionamiento y mejorar la movilidad.</p>
            <!-- Aquí puedes agregar íconos sobre las ventajas de las zonas azules -->
            <div class="benefits">
                <div class="benefit">
                    <i class="fa fa-map-marker-alt"></i> <!-- Ejemplo de icono -->
                    <h3>Ubicación</h3>
                    <p>Estaciona cerca de tu destino.</p>
                </div>
                <div class="benefit">
                    <i class="fa fa-wallet"></i> <!-- Ejemplo de icono -->
                    <h3>Tarifas Accesibles</h3>
                    <p>Precios justos y regulados.</p>
                </div>
                <div class="benefit">
                    <i class="fa fa-shield-alt"></i> <!-- Ejemplo de icono -->
                    <h3>Seguridad</h3>
                    <p>Protección garantizada en todas las zonas azules.</p>
                </div>
            </div>
        </section>

        <section class="map">
            <h2>Mapa de Zonas Azules</h2>
            <!-- Aquí iría un mapa interactivo si tienes acceso a una API o una imagen de mapa -->
            <img src="{{ asset('images/mapa_zonas_azules.jpg') }}" alt="Mapa de Zonas Azules">
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Zonas Azules Fusagasugá</p>
        <!-- Aquí puedes agregar iconos de redes sociales -->
        <div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </footer>

    <!-- Enlace a tu archivo JS si tienes scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
