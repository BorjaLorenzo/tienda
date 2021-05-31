<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Gestor Tareas</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>

<body class="#ffcdd2 red lighten-4">
    <header class="container ">
        <div class="row">
            <div class="col s3 center-align">
                <img src="<?= asset('img/principal.jpg'); ?>">
            </div>
            <div class="col s5 right-align"><h3>Pinturas Pineva</h3></div>
        </div>
    </header>
    <nav>
        <div class="nav-wrapper">
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <a href="<?= url('login') ?>" class="brand-logo right">Loggin/Registrarse</a>
            <li><a href="<?= url('categorias') ?>">Categorias</a></li>
            <li><a href="<?= url('Destacados') ?>">Destacados</a></li>
            <li><a href="<?= url('Nuevos') ?>">Nuevos</a></li>
            <li><a href="<?= url('Ofertas') ?>">Ofertas</a></li>
            <li><a href="<?= url('Carrito') ?>"><i class="large material-icons">add_shopping_cart</i></a></li>
          </ul>
        </div>
      </nav>
    <div class="container ">
        @yield('cuerpo')
    </div>
    <footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Pinturas Pineva</h5>
              <p class="grey-text text-lighten-4">Nos encargamos de dar color a tus sueños</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Contacto</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Email</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2021 Copyright Text
          <a class="grey-text text-lighten-4 right" href="#!">Mas informacion</a>
          </div>
        </div>
      </footer>
</body>

</html>