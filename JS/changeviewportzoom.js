    <script>
        // Inyecta el viewport en fase de parseo (no después),
        // así el navegador renderiza ya "a la mitad".
        (function() {
            // ancho "real" del dispositivo antes de aplicar viewport
            var w = Math.min(screen.width, screen.height); // cubre portrait/landscape
            var content;

            if (w <= 425) {
                // Para ver todo al 50% en pantallas <=425px:
                // Hacemos que el viewport sea el doble de ancho (850px).
                content = 'width=850, initial-scale=1';
                // Si quieres bloquear el zoom del usuario, usa:
                // content = 'width=850, initial-scale=1, maximum-scale=1, user-scalable=no';
            } else {
                content = 'width=device-width, initial-scale=1';
            }

            document.write('<meta name="viewport" content="' + content + '">');
        })();
    </script>
