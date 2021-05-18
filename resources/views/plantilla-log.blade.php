<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Log</title>
</head>
<body class="#ffcdd2 red lighten-4">
    <nav>
        <div class="nav-wrapper">
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <a class="brand-logo right" href="<?= url('inicio'); ?>"><i class="material-icons left">arrow_back</i>Volver a la pagina</a>
            <li><a href="login">Login</a></li>
            <li><a href="registrarse">Registrate</a></li>
          </ul>
        </div>
    </nav>
    @yield('formulario')
</body>
</html>