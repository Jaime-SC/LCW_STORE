<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function getTipos(){
       //  $productos = ["Polera","Pantalon","Chaqueta","Polerones"]
        $tipos = array();
        $tipos[] = "Polera";
        $tipos[] = "Pantalon";
        $tipos[] = "Chaqueta";
        $tipos[] = "Polerones";

        return $tipos;
    

    }

    public function getTallas(){
        $tallas = array();
        $tallas[] = "S";
        $tallas[] = "M";
        $tallas[] = "L";
        $tallas[] = "XL";

        return $tallas;
    }

        
    public function getProductos(){

        $productos = Producto::all();
        return $productos;
    }

    public function crearProducto(Request $request){
        $input = $request->all();
        $producto = new Producto();
        $producto->nombre = $input["nombre"];
        $producto->tipo = $input["tipo"];
        $producto->talla = $input["talla"];
        $producto->cantidad = $input["cantidad"];
        $producto->save();
        return $producto;
    }

    public function eliminarProducto(Request $request){
        $input = $request->all();
        $id = $input["id"];
        //Eloquent: El administrador de BD de Laravel se llama Eloquent
        //1. Ir a buscar el registro bd
        $producto = Producto::findOrFail($id);
        //2. Para eliminar llamo al metodo delete
        $producto->delete(); //DELETE FROM productos WHERE id=1
        return "ok";
        

    }
}

