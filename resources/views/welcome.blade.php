<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Manzanitas</title>
    <link rel="icon" href="/asset/anciana.png" type="image/jpeg">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/map.js'])



</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        @endif
    </div>

    <div class="row p-1" id="navbar">
        <div class="col">
            <img src="/asset/comunidad.png" alt="">
        </div>
        <div class="col">
            <b>
                <h4>Manzanitas</h4>
            </b>

        </div>
        <div class="col">
            <a href="#quienesSomos">
                <h4>¿Quienes Somos?</h4>
            </a>
        </div>


        <div class="col">
            <a href="#queOfrecemos">
                <h4>¿Que ofrecemos?</h4>
            </a>
        </div>

        @auth
            <!-- Contenido que se mostrará solo a usuarios autenticados -->
        @else
            <!-- Contenido que se mostrará solo a usuarios no autenticados -->
            <div class="col">
                <a href="{{ route('login') }}">
                    <h4>Login</h4>
                </a>
            </div>
        @endauth

        <div class="col">
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/home') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                    {{-- <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a> --}}

                    {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif --}}
                @endauth
            </div>
        </div>
        <div class="col"></div>

    </div>



    <section class="somos" id="quienesSomos">
        <hr>
        <h1 class="text-center font-weight-bold ">¿Quienes somos?</h1>
        <p class="text-justify font-italic h4">
            Somos un proyecto dedicado a crear espacios especiales en la ciudad llamados "Manzanas
            del Cuidado".
            Nuestra misión es brindar apoyo y servicios a las mujeres y sus familias que se dedican
            al cuidado
            de sus seres queridos. Entendemos las necesidades de estas cuidadoras y buscamos
            ofrecerles un lugar
            donde puedan encontrar tiempo para sí mismas y acceder a una variedad de servicios de
            forma
            completamente gratuita.
        </p>
        <section class="contenedor2">
            <hr>
            <img src="/asset/familia.jpg" alt="">
        </section>

    </section>

    


    <section class="servicios" id="queOfrecemos">
        <hr>
        <h1 class="text-center font-weight-bold ">¿Que Ofrecemos?</h3>
            <p class="text-justify font-italic h4">
                En las Manzanas del Cuidado, ponemos a disposición de las cuidadoras una amplia gama de
                servicios y recursos para mejorar su calidad de vida. Algunas de las cosas que ofrecemos
                incluyen:
            </p>
            <div class="container">
                <div class="card">
                    <img src="/asset/imagen1.jpg" alt="Servicio 1">
                    <h4>Para quienes
                        requieren cuidado
                        o apoyo</h4>
                    <p> Servicios gratuitos para las niños, las personas mayores y las personas con discapacidad. Aquí
                        promovemos su autonomía y desarrollo.</p>
                    <a href="{{ route('solicitud') }}" class="btn">
                        <h4>Ver mas</h4>
                    </a>
                </div>

                <div class="card">
                    <img src="/asset/imagen2.jpg" alt="Servicio 2">
                    <h4>Para las familias
                        y la ciudadanía
                        en general</h4>
                    <p>Las Manzanas del Cuidado brindan servicios para toda la familia. Aquí podrán aprenden a cuidar,
                        mientras se divierten y comparten.</p>
                    <a href="{{ route('solicitud') }}" class="btn">
                        <h4>Ver mas</h4>
                    </a>
                </div>

                <div class="card">
                    <img src="/asset/imagen3.jpg" alt="Servicio 3">
                    <h4>Ubicacio de las Manzanas del cuidado</h4>
                    <p>Encuentra la manzana de cuidado mas cercana a tu ubicacin y disfruta de nuestros servicios. En
                        busca de tu bienestar</p>
                    <a href="{{ route('localidad') }}" class="btn">
                        <h4>Ver mas</h4>
                    </a>
                </div>
            </div>
    </section>
    <section>
        <div class="content">
            <hr>
            <h1 class="text-center font-weight-bold ">Encuetra las manzanas mas ceracanas a tu ubicacion
            </h1>

        </div>
        <div id="map"></div>
    </section>

    <footer>
        <p>&copy; 2023 Manzanas. Todos los derechos reservados. <small> SENA / soft</small></p>
    </footer>
</body>

</html>


<style>
    * {
        padding: 0;
        margin: 0;
        font-family: 'Quicksand', sans-serif;
        color: black;
    }

    #map {
        height: 350px;
        margin: 1rem 3rem;
    }

    #navbar {
        background-color: #34BE82;
        display: flex;
        position: fixed;
        top: 0;
        left: 0;
        width: 110%;
        z-index: 100;
    }

    .navegacion {
        position: fixed;
        top: 0;
        left: 0;
        color: #fff;
        z-index: 100;
    }

    /* Estilos para el contenedor */
    .contenedor2 {
        margin-top: 6rem;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        width: 50%;
        text-align: center;
        margin-left: 30%;


    }

    /* Estilos para la imagen */
    .contenedor2 img {
        border-radius: 10px ;
        max-width: 80%;
        height: auto;
        box-shadow: 0px 0px 10px 0px #8f8f8f
    }
    .contenedor2 img:hover{
        box-shadow: 0px 0px 10px 0px #34BE82

        
    }


    a {
        color: #ffffff;
        font-size: 24px;
        text-decoration: none;
    }

    h1 {
        font-style: bold;
    }

    .textoImg {
        background-color: #ffffffa8;
        font-weight: 800;
        font-size: 30px;
        /* color: #2F86A6; */
        color: #34BE82;


    }

    .info {
        justify-content: auto;
        margin-top: 1%;
    }

    .info h3 {
        font-weight: bold;
        border-bottom: 2px solid;
    }

    .info p {
        font-size: 20px;
    }


    #uno {
        background: #34BE82;

    }

    #dos {
        background: #F2F013;

    }

    .card {
        width: 18rem;
        border: none;
        box-shadow: 0px 0px 10px 0px
    }

    .card-title {
        color: white;
        text-align: center;
    }

    .somosimg {
        display: flex;
        justify-content: center;
        align-items: center;
        border: 2px solid yellow;
        padding: 20px;
        border-radius: 8px
            /* Espacio alrededor de la imagen */
    }

    .somosimg img {
        max-width: 100%;
        /* Ajusta el tamaño de la imagen al contenedor */
        height: auto;
        border-radius: 8px;
    }

    section {
        margin: 2rem 5rem;
    }

    .somos {
        margin-top: 5rem;
    }

    .container {
        display: flex;
        justify-content: space-between;
    }

    /* Estilos de las tarjetas */
    .card {
        width: 300px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin: 10px;
        padding: 10px;
        border-radius: 8px;
        border: 2px solid #00FF00;
        /* Borde verde */
        text-align: center;
    }

    .card img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .card h4 {
        margin-top: 15px;
        font-size: 1.5rem;
    }

    .card p {
        margin-top: 10px;
        font-size: 1rem;
    }

    .btn {
        font-style: bold;
        display: inline-block;
        padding: 12px 10px;
        background-color: #34BE82;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        margin-top: 20px;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #34be82a0;
    }

    footer {
        background-color: #333;
        /* Color de fondo del footer */
        color: #fff;
        /* Color del texto del footer */
        text-align: center;
        /* Centra el texto horizontalmente */
        padding: 10px 0;
        /* Espacio alrededor del texto del footer */
    }
</style>