<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ciudades</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ asset('assets/home.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="ciudad" id="page-top">

    <!-- Navigation-->
    @include('body.nav')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Bienvenidos!</div>
            <div class="masthead-heading text-uppercase">Un gusto para nosotros</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Cuentame más</a>
        </div>

    </header>

    <style>
    .card {
        text-align: center;
        width: 250px;
        height: 320px;
        background-image: linear-gradient(to right, #000080, #82CAFF, #000080);
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        font-size: 16px;
        /* Tamaño de letra */
        font-family: Arial, sans-serif;
        /* Fuente */

    }

    @keyframes color-change {
        0% {
            color: red;
        }

        25% {
            color: blue;
        }

        50% {
            color: green;
        }

        75% {
            color: orange;
        }

        100% {
            color: red;
        }
    }

    .animated-title {
        animation: color-change 5s infinite;
    }

    button {
        position: relative;
        font-size: 1.2em;
        padding: 0.7em 1.4em;
        background-color: #BF0426;
        text-decoration: none;
        border: none;
        border-radius: 0.5em;
        color: #DEDEDE;
        box-shadow: 0.5em 0.5em 0.5em rgba(0, 0, 0, 0.3);
    }

    button::before {
        position: absolute;
        content: '';
        height: 0;
        width: 0;
        top: 0;
        left: 0;
        background: linear-gradient(135deg, rgba(33, 33, 33, 1) 0%, rgba(33, 33, 33, 1) 50%, rgba(150, 4, 31, 1) 50%, rgba(191, 4, 38, 1) 60%);
        border-radius: 0 0 0.5em 0;
        box-shadow: 0.2em 0.2em 0.2em rgba(0, 0, 0, 0.3);
        transition: 0.3s;
    }

    button:hover::before {
        width: 1.6em;
        height: 1.6em;
    }

    button:active {
        box-shadow: 0.2em 0.2em 0.3em rgba(0, 0, 0, 0.3);
        transform: translate(0.1em, 0.1em);
    }

    .bt {
        display: flex;
        justify-content: center;
        /* Centra horizontalmente */
        align-items: center;
        /* Centra verticalmente */
    }
</style>


    <!-- Services-->
    <!-- Portfolio Grid-->
    <!-- resources/views/ciudad.blade.php -->
    <section class="page-section bg-light" id="portfolio">
    <div class="container" style=" background-image: linear-gradient(to right, #357EC7, #87AFC7, #357EC7)">
            <div class="text-center">
                <br>
                <h2 class="section-heading text-uppercase animated-title">Ciudades</h2>
                <h3 class="section-subheading text-muted">Ciudades en Costa Rica</h3>
            </div>
            <div class="row">
                @foreach ($ciudades as $ciudad)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{{ $ciudad->id }}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="card-img-top" src="data:image/jpeg;base64,{{ base64_encode($ciudad->imagen) }}"
                                alt="{{ $ciudad->nombre }}" />
                        </a>
                        <div class="card-body">
                            <p class="card-title">{{ $ciudad->nombre }}</p>
                            <p class="card-text">{{ $ciudad->categoria }}</p>
                            <!-- Agregamos un contenedor oculto para la descripción -->
                            <div class="portfolio-description" id="descripcion{{ $ciudad->id }}" style="display: none;">
                                {{ $ciudad->descripcion }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="bt">
                <button onclick="window.history.back();">
                    <b>Volver</b>
                </button>
            </div>
            <br>
        </div>
    </section>

    @foreach ($ciudades as $ciudad)
    <div class="portfolio-modal modal fade" id="portfolioModal{{ $ciudad->id }}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog" style="max-width: 500px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 class="text-uppercase">{{ $ciudad->nombre }}</h2>
                    <p class="item-intro text-muted">{{ $ciudad->categoria }}</p>
                    <img class="img-fluid" src="data:image/jpeg;base64,{{ base64_encode($ciudad->imagen) }}"
                        alt="{{ $ciudad->nombre }}" />
                    <p>{{ $ciudad->descripcion }}</p>

                    <button class="btn btn-success btn-like" data-playa-id="{{ $ciudad->id }}">
                        <i class="fas fa-thumbs-up me-1"></i> Me gusta
                    </button>

                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- About-->

    <!-- Team-->
    <!-- @include('body.team') -->

    <!-- Contact-->
    <!-- Footer-->
    @include('body.footer')

    <!-- Antes de cerrar el body -->



    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>