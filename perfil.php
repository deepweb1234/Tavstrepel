<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla Dinámica</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script defer src="https://use.fontawesome.com/releases/v6.7.2/js/all.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v6.7.2/js/v4-shims.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v6.7.2/js/fontawesome.js"> </script>

</head>

<body>
    <div class="container">
        <!-- Barra Lateral Izquierda -->
        <aside class="sidebar">
            <div class="logo">Mi Sitio</div>
            <nav class="menu">
                <ul>

                    <li><a href="#perfil" data-section="perfil"><i class="fa-solid fa-user fa-lg"></i> Perfil</li></a>
                    <li><a href="#about" data-section="about"><i class="fa-solid fa-circle-info fa-lg"></i> Acerca de</li></a>
                    <li><a href="#services" data-section="services"><i class="fa-solid fa-book fa-lg"></i> terminos y condiciones</li></a>
                    <li><a href="#contact" data-section="contact">Contacto</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Contenido Principal -->
        <main class="main-content">
            <section id="perfil" class="section hidden">
                <h1>Bienvenido a mi sitio</h1>
                <img src="./img/avatar.png" width="20%" alt="">
                <p id="perfil-content">Cargando información...</p>
            </section>

            <section id="about" class="section hidden">
                <h2>Acerca de Nosotros</h2>
                <p id="about-content">Cargando información...</p>
            </section>

            <section id="services" class="section hidden">
                <h2>Nuestros Servicios</h2>
                <div id="services-container"></div>
            </section>

            <section id="contact" class="section hidden">
                <h2>Contacto</h2>
                <form id="contact-form">
                    <input type="text" id="name" placeholder="Nombre" required>
                    <input type="email" id="email" placeholder="Correo Electrónico" required>
                    <textarea id="message" placeholder="Mensaje" required></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </section>

            <footer class="hidden">
                <p>&copy; 2023 Mi Sitio. Todos los derechos reservados.</p>
            </footer>
        </main>
    </div>

    <script src="script.js"></script>
</body>

</html>