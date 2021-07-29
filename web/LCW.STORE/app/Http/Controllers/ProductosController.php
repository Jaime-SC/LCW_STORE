<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function getTipo(){
       //  $productos = ["Polera","Pantalon","Chaqueta","Polerones"]
        $tipo = array();
        $tipo[] = "Polera";
        $tipo[] = "Pantalon";
        $tipo[] = "Chaqueta";
        $tipo[] = "Polerones";

        return $tipo;

    }

    public function getProductos(){

        $productos = Producto::all();
        return $productos;
    }

    public function crearProducto(){

        $producto = new Producto();
        $producto->nombre = "polera blanca";
        $producto->producto = "polera";
        $producto->talla = "L";
        $producto->cantidad = 10;
        $producto->save();
    }
}
