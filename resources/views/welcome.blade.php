<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Manzanitas</title>
    <link rel="icon" href="/asset/anciana.png" type="image/jpeg">



    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])



</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        @endif
    </div>


    <div class="container-fluid">

        <div class="row p-4" id="navbar">
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

            <div class="col">
                <a href="{{ route('login') }}">
                    <h4>Login</h4>
                </a>
            </div>

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
    </div>

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="row">
                    <div class="row">
                        <div class="col-md-12 " style="margin-top: 6%">
                            <div class="contenedor2">
                                <h3 class="textoImg">Familias Manzanitas</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12" id="quienesSomos">
                        <div class="info " style="margin-top: 11%">
                            <h3>¿Quiénes Somos?</h3>
                            <p>
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
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="contenedor">
                            <h3 class="textoImg">Servicios de Manzanitas para la población</h3>
                        </div>

                    </div>
                </div>



                <div class="row">
                    <div class="col-md-12">
                        <div id="queOfrecemos" class="info">
                            <h3>¿Que Ofrecemos?</h3>
                            <p>
                                En las Manzanas del Cuidado, ponemos a disposición de las cuidadoras una amplia gama de
                                servicios y recursos para mejorar su calidad de vida. Algunas de las cosas que ofrecemos
                                incluyen:
                            </p>
                        </div>

                    </div>

                </div>

                <div class="row p-5">
                    <div class="col">
                        <div class="card" id="uno">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <b>
                                        Para las mujeres
                                        y personas
                                        cuidadoras
                                    </b>
                                </h5>
                                <p class="card-text" style="font-size: 20px">
                                    <b>

                                    </b>
                                    En las Manzanas del Cuidado encuentra tiempo y servicios gratuitos de educación,
                                    respiro, bienestar, atención en violencias y generación de ingresos.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem; color: whith; " id="dos">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <b>
                                        Para quienes
                                        requieren cuidado
                                        o apoyo
                                    </b>
                                </h5>
                                <p class="card-text" style="font-size: 20px">

                                    Servicios gratuitos para las niñas, los niños, las personas mayores y las personas
                                    con discapacidad. Aquí promovemos su autonomía y desarrollamos sus capacidades.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-2"></div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-2"></div>
                <div class="col-8">



                    <div class="row">
                        <div class="col-md-12">
                            <div id="queOfrecemos" class="info">
                                <h1>
                                    Encuentra la Manzana del Cuidado más cercana a tu ubicación​
                                    Conoce los servicios disponibles
                                </h1>
                            </div>

                        </div>

                    </div>

                    <div class="row p-5">
                        <div class="col">
                            <div class="card" id="" style="background-color: #eceaea ; color: black;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <b>
                                            Ubicación
                                        </b>
                                    </h5>
                                    <img src="./asset/mapa.png" class="card-img-top" alt="...">
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card" id="" style="background-color: #eceaea ; color: black;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <b>
                                            Ubicación
                                        </b>
                                    </h5>
                                    <img src="./asset/mapa.png" class="card-img-top" alt="...">
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
</body>

</html>



<style>
    * {
        padding: 0;
        margin: 0;
        font-family: Arial, sans-serif;
    }

    #navbar {
        background-color: #34BE82;
        display: flex;
        position: fixed;
        top: 0;
        left: 0;
        width: 110%;
        z-index: 100;
        padding: 2px;

    }

    .navegacion {
        position: fixed;
        top: 0;
        left: 0;
        color: #fff;
        z-index: 100;
        */
    }


    .contenedor {
        background-image: url('/asset/anciana.jpg');
        background-size: cover;
        background-position: center center;
        width: 100%;
        height: 480px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        box-shadow: 0px 0px 10px 2px gray;
        justify-content: center;
        text-align: center;
        padding: 30px;
    }



    .contenedor2 {
        background-image: url('/asset/fam.avif');
        background-size: cover;
        background-position: center center;
        width: 100%;
        height: 480px;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 5px;
        box-shadow: 0px 0px 10px 2px gray;
        justify-content: center;
        text-align: center;
        padding: 30px;
    }

    a {
        color: #ffffff;
        font-size: 24px;
        text-decoration: none;
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
</style>
