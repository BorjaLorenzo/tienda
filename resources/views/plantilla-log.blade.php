<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <title>Log</title>
</head>
<body class="#ffcdd2 red lighten-4">
    <nav>
        <div class="nav-wrapper">
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <a class="brand-logo right" href="<?= url('Destacados'); ?>"><i class="material-icons left">arrow_back</i>Volver a la pagina</a>
            <li><a href="login">Login</a></li>
            <li><a href="registrarse">Registrate</a></li>
          </ul>
        </div>
    </nav>
    @yield('formulario')
</body>
</html>