@extends('layouts.master')
@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table=hover table=bordered table=striped table-responsive">
              <thead class="bg-gradient text-light" style="background-color: #083D77;">
                <tr>
                  <td>Nombre</td>
                  <td>Producto</td>
                  <td>Talla</td>
                  <td>Cantidad</td>
                  <td>Acciones</td>
                </tr>

              </thead>
              <tbody id="tbody-inventario">

              </tbody>

            </table>

        </div>

    </div>

@endsection

@section('javascript')
    <script src="{{asset('js/servicios/productosService.js')}}"></script>
    <script src="{{asset('js/inventario.js')}}"></script>
@endsection
