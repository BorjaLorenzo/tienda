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
    <title>Menu Configuacion Administrador</title>
</head>
<body class="#9575cd deep-purple lighten-2">
    <div class="container">
        <nav class="#f9a825 yellow darken-3">
            <div class="nav-wrapper">
              <a class="brand-logo right">Configuracion {{$titulo}}</a>
              <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="<?=url('añadir-'.$seccion)?>">Añadir</a></li>
                <li><a href="<?=url('editar-'.$seccion)?>">Editar</a></li>
                <li><a href="<?=url('eliminar-'.$seccion)?>">Eliminar</a></li>
              </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        @yield('cuerpo')
    </div>
</body>
</html>