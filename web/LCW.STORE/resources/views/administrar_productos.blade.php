<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Productos</title>
</head>

<body>
    <header class="bg-dark text-light">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #06BCC0;">
            <div class="container-fluid">
                <a class="navbar-brand " href="#"><img src="{{ asset('img/logo_daruma.png') }}" alt=""
                        class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        <a class="nav-link" href="{{ route('administrar_productos') }}">Productos</a>
                        <a class="nav-link" href="{{ route('inventario') }}">Inventario</a>
                        <a class="nav-link" href="{{ route('proveedores') }}">Proveedores</a>
                        <a class="nav-link" href="{{ route('envios') }}">Envios</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container-flui">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-6 col-12">
                <div class="card">
                    <div class="card-header bg-dark bg-gradient text-light">
                        <span>Administrador de Productos</span>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nombre-txt" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre-txt">
                        </div>
                        <div class="mb-3">
                            <label for="producto-select">Producto</label>
                            <select class="form-select" id="producto-select">
                                <option value="1">Polera</option>
                                <option value="4">Pantalon</option>
                                <option value="2">MousePad</option>
                                <option value="3">Cuadro</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="mb-3">
                                <label for="nombre-txt" class="form-label">Talla</label>
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <button type="button" class="btn btn-outline-dark"> S </button>
                                <button type="button" class="btn btn-outline-primary"> M </button>
                                <button type="button" class="btn btn-outline-primary"> L </button>
                                <button type="button" class="btn btn-outline-primary"> XL </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" id="registrar-btn" class="ms-3 btn btn-outline-success">Registrar</button>
                        <button type="button" class="ms-3 btn btn-outline-danger">Borrar</button>
                    </div>
                </div>
            </div>
            <div class="col-lg col-md col">
                <div class="card">
                    <div class="card-header bg-dark bg-gradient text-light">
                        <span>Listado de Jugadores</span>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-stripped">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Imagen</th>
                                    <th>Estatura</th>
                                    <th>Posicion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tobio Kageyama</td>
                                    <td>NONE</td>
                                    <td>180 cm</td>
                                    <td>Armador</td>
                                </tr>
                                <tr>
                                    <td>Shōyō Hinata</td>
                                    <td>NONE</td>
                                    <td>162 cm</td>
                                    <td>Bloqueador Central</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>


    </main>
    <footer>

    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="js/index.js"></script>
</body>

</html>
