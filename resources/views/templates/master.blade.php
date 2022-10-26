<!doctype html>
<!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz,
     since 2019, based on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
    -->
    <style>
        .fakeimg {
            height: 100px;
            background: #aaa;
        }
    </style>

    <title>My INE project</title>
</head>

<body>
    @include('layouts.header')
        @yield('content')
    <!-- LAYOUT: HEADER -->
    <!-- SECTION: Main menu -->
    <!-- <nav class="navbar navbar-expand-sm bg-primary bg-opacity-50">
    <a class="navbar-brand ms-4" href="#">
      <p class="fs-4 fw-bold text-white pt-2">My INE eShop</p>
    </a>
    <form class="d-flex form-inline" role="search">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" style="width: 400px;">
      <button class="btn btn-success" type="submit">Buscar</button>
    </form>
    <ul class="navbar-nav ms-auto pt-1">
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Autenticación</a>
      </li>
      <li class="nav-item me-2">
        <a class="nav-link" href="#">
          <span class="material-symbols-outlined text-white">shopping_cart</span>
        </a>
      </li>
  </nav> -->

    <!-- LAYOUT: CENTER -->

    <div class="parent-container d-flex">
        <div class="container-child content-center">
            @yield('ofertas')
            @yield('nuevos')
        </div>

        <div class="container-child content-right">
            @yield('destacados')
        </div>
    </div>


    @include('layouts.footer')
        @yield('content')

    <!-- LAYOUT: FOOTER -->
    <!-- <footer class="w-100 py-4 flex-shrink-0 bg-primary bg-opacity-50 text-white">
    <div class="container py-4">
      <div class="row gy-4 gx-5">
        <div class="col-lg-3">
          <h5 class="text-white mb-3">Acerca de</h5>
          <ul class="list-unstyled text-muted">
            <li><a href="#" style="color:white; text-decoration:none;">Quienes somos</a></li>
            <li><a href="#" style="color:white; text-decoration:none;">Trabaja con nosotros</a></li>
            <li><a href="#" style="color:white; text-decoration:none;">Aviso legal</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h5 class="text-white mb-3">Navegación</h5>
          <ul class="list-unstyled text-muted">
            <li><a href="#" style="color:white; text-decoration:none;">Idioma/Languages</a></li>
            <li><a href="#" style="color:white; text-decoration:none;">Mapa del sitio</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h5 class="text-white mb-3">Ayuda</h5>
          <ul class="list-unstyled text-muted">
            <li><a href="#" style="color:white; text-decoration:none;">Gestionar compras</a></li>
            <li><a href="#" style="color:white; text-decoration:none;">Tarifas y políticas de envío</a></li>
            <li><a href="#" style="color:white; text-decoration:none;">Devolver o remplazar productos</a></li>
            <li><a href="#" style="color:white; text-decoration:none;">Contacto para ayuda</a></li>
            <li><a href="#" style="color:white; text-decoration:none;">IVA sobre los bienes</a></li>
            <li><a href="#" style="color:white; text-decoration:none;">Métodos de pago</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h5 class="text-white mb-3">Contacto</h5>
          <ul class="list-unstyled text-muted">
            <li><a href="#" style="color:white; text-decoration:none;">Atención al cliente</a></li>
            <li><a href="#" style="color:white; text-decoration:none;">Twitter</a></li>
            <li><a href="#" style="color:white; text-decoration:none;">Facebook</a></li>
            <li><a href="#" style="color:white; text-decoration:none;">Instagram</a></li>
            <li><a href="#" style="color:white; text-decoration:none;">Instagram</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>
  </footer> -->


    <!-- Loading Javascripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!--  <script>window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>')</script> -->
    <!-- <script src="../../assets/js/vendor/popper.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>