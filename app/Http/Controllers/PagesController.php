<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function Inicio(){
        return view('inicio');
    }


    //Productos
    public function Producto(){

        $item_producto = App\Producto::all();

        return view('Producto', compact('item_producto'));
    }

    //Productos Detalles
    public function Producto_Detalle($id){
        $producto = App\Producto::find($id);

        return view('producto.detalle', compact('producto'));
    }

    //Productos Agregar
    public function Producto_Agregar(){

        return view('producto.agregar');
    }

    //Clientes
    public function Cliente(){
        return view('Cliente');
    }


    //Usuario
    public function Usuario(){
        $nombre = App\Usuario::all();

        return view('Usuario', compact('nombre'));
    }

}
