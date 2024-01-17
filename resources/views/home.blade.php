<h5>HOME</h5>
<a href="{{route('logout')}}">JAJAJAJAJAJA</a>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Font Awesome for icons -->
    <title>Turismo</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <img src="{{asset('assets/logo.png')}}" alt="Logo de Turismo" width="100" height="75">
        <ul class="nav-list">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Acerca de nosotros</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Destinos Turisticos</a></li>
        </ul>
        <div class="container" id="miContainer">
            <div class="search-container">
                <input class="input" type="text">
                <svg viewBox="0 0 24 24" class="search__icon">
                    <g>
                        <path
                            d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                        </path>
                    </g>
                </svg>
            </div>
        </div>

    </nav>

    <!-- Content Section -->
    <div class="content">
        <h1>Bienvenido a nuestra página de turismo</h1>
        <p>Explora diferentes destinos: ciudades, montañas y playas.</p>
        <!-- Aquí puedes agregar secciones y contenido relacionado con turismo -->
    </div>

</body>

</html>