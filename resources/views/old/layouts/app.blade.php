<html>

    <head> 
        <title>PEM - @yield('title')</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </head>

    <body>
{{--         <div class="row">

            <nav class="navbar navbar-dark border border-white d-flex justify-content-center col text-white" style="background-color: #0076B1">
                <a href="/pem" class="navbar-brand ">Listado</a>
            </nav>
            
            <nav class="navbar navbar-dark border border-white d-flex justify-content-center col text-white" style="background-color: #0076B1">
                <a href="/pem/create" class="navbar-brand">Cargar</a>
            </nav>
            
        </div> --}}

        <nav class="navbar navbar-expand navbar-dark bg-dark ">
            <a href="#" class="navbar-brand">
                <img src="/adminlte/img/logo_muni.png" alt="" class="d-inline-block align-top" width="30" height="50">
            </a>
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="/pem">Listado <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="/pem/create">Carga</a>
            </div>
        </nav>

        <div class="container my-2">

            @yield('content')

        </div>
    </body>

</html>