@extends('layouts.master')
@section('contenido')
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
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="talla-txt" class="form-label">Talla</label>
                        <div>
                            <div class="btn-group " role="group" aria-label="Basic outlined example" id="cantidad-txt">
                                <button type="button" class="btn btn-outline-dark"> S </button>
                                <button type="button" class="btn btn-outline-primary"> M </button>
                                <button type="button" class="btn btn-outline-primary"> L </button>
                                <button type="button" class="btn btn-outline-primary"> XL </button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="cantidad-txt">Cantidad</label>
                        <input type="number" class="form-control" id="cantidad-txt">
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
                    <span>Listado de Productos</span>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-stripped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Producto</th>
                                <th>Talla</th>
                                <th>Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Polera Blanca</td>
                                <td>Polera</td>
                                <td>S</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>Polera Negra</td>
                                <td>Polera</td>
                                <td>L</td>
                                <td>10</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('javascript')
    <script src="{{asset('js/administrar_productos.js')}}"></script>    
@endsection
