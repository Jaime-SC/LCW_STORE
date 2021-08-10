<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;


class ProveedoresController extends Controller
{
    public function getRegiones()
    {
        $regiones = array();
        $regiones[] = "Arica y Parinacota";
        $regiones[] = "Tarapacá";
        $regiones[] = "Antofagasta";
        $regiones[] = "Atacama";
        $regiones[] = "Coquimbo";
        $regiones[] = "Valparaíso";
        $regiones[] = "Metropolitana de Santiago";
        $regiones[] = "Libertador General Bernardo O'Higgins";
        $regiones[] = "Maule";
        $regiones[] = "Ñuble";
        $regiones[] = "Biobío";
        $regiones[] = "Araucanía";
        $regiones[] = "Los Ríos";
        $regiones[] = "Los Lagos";

        return $regiones;
    }


    public function crearProveedor(Request $request)
    {
        $input = $request->all();
        $proveedor = new Proveedor();
        $proveedor->nombre = $input["nombre"];
        $proveedor->representante = $input["representante"];
        $proveedor->descripcion = $input["descripcion"];
        $proveedor->numero = $input["numero"];
        $proveedor->region = $input["region"];
        $proveedor->comuna = $input["comuna"];
        $proveedor->direccion = $input["direccion"];
        $proveedor->save();
        return $proveedor;
    }
}
