<!doctype html>
<!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz,
     since 2019, based on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
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

        .content-right {
            max-width: 400px;
        }
    </style>

    <title>My INE project</title>
</head>

<body>
    @include('layouts.header')
    @yield('content')

    <!-- LAYOUT: CENTER -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="container-fluid content-center">
                    @yield('ofertas')
                    @yield('nuevos')
                    @yield('productos')
                    @yield('carrito')
                    @yield('register')
                    @yield('login')
                    @yield('user')
                </div>
            </div>
            @if(Route::currentRouteName() == 'home')
            <div class="col-sm-4">
                <div class="container-fluid content-right">
                    @yield('destacados')
                </div>
            </div>
            @endif
        </div>
    </div>




    @include('layouts.footer')
    @yield('content')


    <!-- Loading Javascripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!--  <script>window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>')</script> -->
    <!-- <script src="../../assets/js/vendor/popper.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>