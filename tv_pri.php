<!DOCTYPE html>
<html lang="es">

<head>
    <!-- METAS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FIN DE METAS -->
    <link rel="shortcut icon" href="./img/LOGO.jpg">
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/stylehome.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/svg.css">

    <style>
        /* botones de carousel */

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);

            height: 190px;
            padding: 30px;



        }

        .carousel-control-prev,
        .carousel-control-next {


            width: 50px;
            height: 50px;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.2);
            border-radius: 50%;
            z-index: 1000;
            /* Asegura que los controles estén encima del resto */


        }

        .carousel-control-prev:hover .carousel-control-prev-icon,
        .carousel-control-next:hover .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.7);
        }


        /* fin de botones de carouse  */



        .container {
            background: rgba(52, 58, 64, 0.7);
            /* Color de fondo semi-translúcido */
            /* Alternativamente, puedes usar un degradado */
            /* background: linear-gradient(135deg, rgba(52, 58, 64, 0.7), rgba(255, 0, 150, 0.7)); */
            padding: 10px;
            /* Espaciado interno */
            border-radius: 50px;
            /* Bordes redondeados */
            backdrop-filter: blur(16px);
            /* Desenfoque de fondo si hay algo detrás */
        }

        .titulo-categoria h2 {

            text-align: left;
            /* Alineación a la izquierda */
            font-size: 2.5rem;
            /* Tamaño de fuente */
            font-family: 'Arial', sans-serif;
            /* Cambia esto a la fuente que prefieras */
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
            /* Sombra para mejorar la legibilidad */
            margin: 0;
            /* Elimina márgenes por defecto */
            padding: 10px 0;
            /* Espaciado arriba y abajo */
        }

        /* card */

        .card {
            width: 212px;
            /* Ajusta el ancho */

            max-height: 1000px;
            /* Ajusta la altura máxima si es necesario */
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 50%;
            /* Asegúrate de que la imagen ocupe el 100% del card */
            height: auto;
            /* Mantiene la proporción de la imagen */

        }


        /* fin de card */

        /* sesion perfil */

        .miperfil {
            display: flex;
            flex-direction: column;
            /* Hace que los botones estén en columna */
            align-items: flex-end;
            gap: 5px;
            position: absolute;
            right: 100px;
            /* Lo coloca en la derecha */
            top: 50%;
            transform: translateY(-50%);
        }

        .miperfil a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            padding: 5px 5px;
            border-radius: 5px;
            transition: 0.3s;
            display: flex;
            align-items: center;
            gap: 5px;
            background-color: rgba(255, 0, 0, 0.8);
            /* Fondo rojo oscuro */
            width: 160px;
            /* Tamaño fijo para alineación */
            justify-content: center;
        }

        .miperfil a:hover {
            background-color: red;
        }

        /* fin metodo sesion */
    </style>
    <!-- FIN DE CSS -->

    <title>Entretenimiento</title>
</head>

<body>


    <!-- este script detecta el tamaño del dispositivo y dipara una alerta -->
    <script>
        // Crear elementos dinámicamente
        const warningDiv = document.createElement('div');
        warningDiv.style.position = 'fixed';
        warningDiv.style.top = '0';
        warningDiv.style.left = '0';
        warningDiv.style.right = '0';
        warningDiv.style.textAlign = 'center';
        warningDiv.style.padding = '10px';
        warningDiv.style.zIndex = '9999';
        warningDiv.style.display = 'none'; // Inicialmente oculto

        document.body.appendChild(warningDiv);

        // Función para ocultar el contenido principal
        function hideContent() {
            const content = document.body.children;
            for (let i = 0; i < content.length; i++) {
                content[i].style.display = 'none'; // Ocultar todo el contenido
            }
        }

        // Función para verificar el ancho de la ventana
        function checkWidth() {
            if (window.innerWidth <= 1279) {
                // Mostrar advertencia
                warningDiv.style.display = 'block';
                // Ocultar contenido
                hideContent();
            } else {
                // Ocultar advertencia
                warningDiv.style.display = 'none';
                // Mostrar contenido
                const content = document.body.children;
                for (let i = 0; i < content.length; i++) {
                    content[i].style.display = ''; // Mostrar todo el contenido
                }
            }
        }

        // Escuchar eventos de redimensionamiento y carga
        window.addEventListener("resize", checkWidth);
        window.addEventListener("load", checkWidth); // Ejecutar al cargar la página
    </script>


    <!-- fin de script detecta tamaño -->


    <header>

        <aside class="miperfil">
            <a href="perfil.php"><i class="fas fa-user"></i> Perfil</a>
            <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
        </aside>


        <img loading="lazy" importance="high" decoding="async" src="../Streaming_Principal/img/header.avif" alt="Banner" class="banner">

        <div class="banner-text">
            Tavo's Entertainment Stream
        </div>

        <div class="banner-img">
            <img loading="lazy" importance="high" decoding="async" src="./img/LOGO.avif" style="margin-right: -25%;" width="10%" alt="logo de la pagina">
        </div>


    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="peliculas.php">Películas</a>
        <a href="series.php">Series</a>
        <a href="deportes.php">Deportes</a>
        <a href="tv_pub.php">TV Pública</a>
        <a href="tv_pri.php">TV Privada</a>
    </nav>

    <div class="container">

        <!-- Carrusel 1 -->
        <div class="titulo-catagoria mb-3">
            <h2>Canales Nacionales</h2>
        </div>
        <div class="carousel slide mb-5">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <center> <img decoding="async" width="141" height="200" src="./img/tvpri/discoverychanel.png" alt="pelicula1a"> </center>
                                <div class="button-container">
                                    <div class="play-button"> <a href="./player/trans/canalpriv/DISCOVERYCHANEL/discoverychanel.php">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="more-info">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15.5859L19.2928 8.29297L20.7071 9.70718L12.7071 17.7072C12.5195 17.8947 12.2652 18.0001 12 18.0001C11.7347 18.0001 11.4804 17.8947 11.2928 17.7072L3.29285 9.70718L4.70706 8.29297L12 15.5859Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card">
                                <center> <img decoding="async" width="141" height="200" src="./img/tvpri/enlace.png" alt=" Pelicula 2a"> </center>
                                <div class="button-container">
                                    <div class="play-button"> <a href="./player/trans/canalpriv/ENLACETV/enlacetv.php">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="more-info">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15.5859L19.2928 8.29297L20.7071 9.70718L12.7071 17.7072C12.5195 17.8947 12.2652 18.0001 12 18.0001C11.7347 18.0001 11.4804 17.8947 11.2928 17.7072L3.29285 9.70718L4.70706 8.29297L12 15.5859Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card">

                                <center> <img decoding="async" width="141" height="200" src="./img/tvpri/cinemax.png" alt="Novela 4"> </center>
                                <div class="button-container">
                                    <div class="play-button"> <a href="./player/trans/canalpriv/CINEMAX/cinemaxtv.php">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="more-info">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15.5859L19.2928 8.29297L20.7071 9.70718L12.7071 17.7072C12.5195 17.8947 12.2652 18.0001 12 18.0001C11.7347 18.0001 11.4804 17.8947 11.2928 17.7072L3.29285 9.70718L4.70706 8.29297L12 15.5859Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card">
                                <center> <img decoding="async" width="141" height="200" src="./img/tvpri/tnt.png" alt="Pelicula 3a"> </center>
                                <div class="button-container">
                                    <div class="play-button"> <a href="./player/trans/canalpriv/TNT/tntTV.php">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="more-info">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15.5859L19.2928 8.29297L20.7071 9.70718L12.7071 17.7072C12.5195 17.8947 12.2652 18.0001 12 18.0001C11.7347 18.0001 11.4804 17.8947 11.2928 17.7072L3.29285 9.70718L4.70706 8.29297L12 15.5859Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col">
                            <div class="card">
                                <center> <img decoding="async" width="141" height="200" src="./img/tvpri/nick.png" alt="logo de nick"> </center>
                                <div class="button-container">
                                    <div class="play-button"> <a href="./player/trans/canalpriv/NICKELODEON/nick.php">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="more-info">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15.5859L19.2928 8.29297L20.7071 9.70718L12.7071 17.7072C12.5195 17.8947 12.2652 18.0001 12 18.0001C11.7347 18.0001 11.4804 17.8947 11.2928 17.7072L3.29285 9.70718L4.70706 8.29297L12 15.5859Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!--  Carrusel 2  -->
        <div class="titulo-catagoria mb-3">
            <h2>Baloncesto & Beisbol</h2>
        </div>
        <div class="carousel slide mb-5">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <center> <img decoding="async" width="141" height="200" src="./img/tvpri/cartoonito.png" alt="logo de cartoonito"></center>
                                <div class="button-container">
                                    <div class="play-button"> <a href="./player/trans/canalpriv/CARTOONITO/cartoonito.php">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="more-info">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15.5859L19.2928 8.29297L20.7071 9.70718L12.7071 17.7072C12.5195 17.8947 12.2652 18.0001 12 18.0001C11.7347 18.0001 11.4804 17.8947 11.2928 17.7072L3.29285 9.70718L4.70706 8.29297L12 15.5859Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card">
                                <center><img src="./img/tvpri/DScience.png" alt=" Pelicula 2b"> </center>
                                <div class="button-container">
                                    <div class="play-button"> <a href="./player/trans/canalpriv/DISCOVERYSCIENCE/discoveryscience.php">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="more-info">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15.5859L19.2928 8.29297L20.7071 9.70718L12.7071 17.7072C12.5195 17.8947 12.2652 18.0001 12 18.0001C11.7347 18.0001 11.4804 17.8947 11.2928 17.7072L3.29285 9.70718L4.70706 8.29297L12 15.5859Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col">
                            <div class="card">
                                <center><img src="./img/tvpri/A-planet.png" alt="logo de animal planet"> </center>
                                <div class="button-container">
                                    <div class="play-button"> <a href="./player/trans/canalpriv/ANIMALPLANET/animalplanet.php">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="more-info">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15.5859L19.2928 8.29297L20.7071 9.70718L12.7071 17.7072C12.5195 17.8947 12.2652 18.0001 12 18.0001C11.7347 18.0001 11.4804 17.8947 11.2928 17.7072L3.29285 9.70718L4.70706 8.29297L12 15.5859Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <center><img src="./img/tvpri/CartoonNetwork.png" alt=" Pelicula 2b"> </center>
                                <div class="button-container">
                                    <div class="play-button"> <a href="./player/trans/canalpriv/CARTOONNETWORK/cartoonnetwork.php">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="more-info">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15.5859L19.2928 8.29297L20.7071 9.70718L12.7071 17.7072C12.5195 17.8947 12.2652 18.0001 12 18.0001C11.7347 18.0001 11.4804 17.8947 11.2928 17.7072L3.29285 9.70718L4.70706 8.29297L12 15.5859Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="col">
                            <div class="card">
                                <center> <img src="./img/tvpri/UChannel.png" class=" card-img-top" alt="logo de universal channel"> </center>
                                <div class="button-container">
                                    <div class="play-button"> <a href="./player/trans/canalpriv/UNIVERSALCHANNEL/universalchannel.php">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="more-info">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15.5859L19.2928 8.29297L20.7071 9.70718L12.7071 17.7072C12.5195 17.8947 12.2652 18.0001 12 18.0001C11.7347 18.0001 11.4804 17.8947 11.2928 17.7072L3.29285 9.70718L4.70706 8.29297L12 15.5859Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="carousel-item">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <img src="./img/peli/pelicula6.jpg" class="card-img-top" alt="Pelicula 6b">
                                <div class="button-container">
                                    <div class="play-button"> <a href="./player/peli/006b.php">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="more-info">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15.5859L19.2928 8.29297L20.7071 9.70718L12.7071 17.7072C12.5195 17.8947 12.2652 18.0001 12 18.0001C11.7347 18.0001 11.4804 17.8947 11.2928 17.7072L3.29285 9.70718L4.70706 8.29297L12 15.5859Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>




        <!-- Carrusel 3 -->
        <div class="titulo-catagoria mb-3">
            <h2>Categoria Variada</h2>
        </div>
        <div class="carousel slide mb-5">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <center> <img decoding="async" width="141" height="200" src="./img/tvpri/DW.png" alt="logo de DW"></center>
                                <div class="button-container">
                                    <div class="play-button"> <a href="./player/trans/canalpriv/DW/dw.php">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="more-info">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15.5859L19.2928 8.29297L20.7071 9.70718L12.7071 17.7072C12.5195 17.8947 12.2652 18.0001 12 18.0001C11.7347 18.0001 11.4804 17.8947 11.2928 17.7072L3.29285 9.70718L4.70706 8.29297L12 15.5859Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card">
                                <center> <img decoding="async" width="141" height="200" src="./img/depo/Bein_Sport_en_español.png" alt="beinsportextra"></center>
                                <div class="button-container">
                                    <div class="play-button"> <a href="./player/trans/deporte/cat-variada/beinsportextra.php">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="more-info">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15.5859L19.2928 8.29297L20.7071 9.70718L12.7071 17.7072C12.5195 17.8947 12.2652 18.0001 12 18.0001C11.7347 18.0001 11.4804 17.8947 11.2928 17.7072L3.29285 9.70718L4.70706 8.29297L12 15.5859Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col">
                            <div class="card">
                                <center> <img decoding="async" width="141" height="200" src="./img/depo/Bein_Sport_en_español.png" alt="beinsportextra"></center>
                                <div class="button-container">
                                    <div class="play-button"> <a href="./player/trans/deporte/cat-variada/beinsportextra.php">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="more-info">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15.5859L19.2928 8.29297L20.7071 9.70718L12.7071 17.7072C12.5195 17.8947 12.2652 18.0001 12 18.0001C11.7347 18.0001 11.4804 17.8947 11.2928 17.7072L3.29285 9.70718L4.70706 8.29297L12 15.5859Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="col">
                            <div class="card">
                                <img src="./img/peli/pelicula4.jpg" class="card-img-top" alt="Pelicula 4c">
                                <div class="button-container">
                                    <div class="play-button"> <a href="./player/peli/004c.php">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="more-info">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15.5859L19.2928 8.29297L20.7071 9.70718L12.7071 17.7072C12.5195 17.8947 12.2652 18.0001 12 18.0001C11.7347 18.0001 11.4804 17.8947 11.2928 17.7072L3.29285 9.70718L4.70706 8.29297L12 15.5859Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="./img/peli/pelicula5.jpg" class="card-img-top" alt="Pelicula 5c">
                                <div class="button-container">
                                    <div class="play-button"> <a href="./player/peli/005c.php">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 2.69127C5 1.93067 5.81547 1.44851 6.48192 1.81506L23.4069 11.1238C24.0977 11.5037 24.0977 12.4963 23.4069 12.8762L6.48192 22.1849C5.81546 22.5515 5 22.0693 5 21.3087V2.69127Z" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="more-info">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15.5859L19.2928 8.29297L20.7071 9.70718L12.7071 17.7072C12.5195 17.8947 12.2652 18.0001 12 18.0001C11.7347 18.0001 11.4804 17.8947 11.2928 17.7072L3.29285 9.70718L4.70706 8.29297L12 15.5859Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>