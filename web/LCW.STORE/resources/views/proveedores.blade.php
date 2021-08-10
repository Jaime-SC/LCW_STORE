@extends('layouts.master')
@section('contenido')
    <div class="row mt-5">
        <div class="col-lg-5 col-md-6 col-12">
            <div class="card">
                <div class="card-header bg-dark bg-gradient text-light">
                    <span>Administrador de Proveedores</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre-txt">
                    </div>
                    <div class="mb-3">
                        <label for="representante-txt" class="form-label">Nombre Representante</label>
                        <input type="text" class="form-control" id="representante-txt">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion-txt" class="form-label">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion-txt">
                    </div>
                    <div class="mb-3">
                        <label for="numero-txt" class="form-label">Número</label>
                        <input type="text" class="form-control" id="numero-txt">
                    </div>
                    <div class="mb-3">
                        <label for="region-select" class="form-label">Región</label>
                        <select class="form-select" id="region-select"> </select>
                    </div>
                    <div class="mb-3">
                        <label for="direccion-txt" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion-txt">
                    </div>






                    <button type="button" id="registrar-btn" class="ms-3 btn btn-outline-success">Registrar</button>
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
                                <th>Nombre Representante</th>
                                <th>Número</th>
                                <th>Region</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-inventario">
                            <td colspan="5">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <table table class="table table-bordered table-hover table-stripped">
                                                    <thead>
                                                        <tr>
                                                            <th>Descripción</th>
                                                            <th>Region</th>
                                                            <th>Comuna</th>
                                                            <th>Dirección</th>
                                                        </tr>
                                                    </thead>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endsection
    @section('javascript')
        <script src="{{ asset('js/servicios/proveedorService.js') }}"></script>
        <script src="{{ asset('js/proveedores.js') }}"></script>
    @endsection
