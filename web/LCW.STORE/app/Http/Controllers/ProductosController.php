<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function getProductos(){
       //  $productos = ["Polera","Pantalon","Chaqueta","Polerones"]
        $productos = array();
        $productos[] = "Polera";
        $productos[] = "Pantalon";
        $productos[] = "Chaqueta";
        $productos[] = "Polerones";

        return $productos;
    }
}
