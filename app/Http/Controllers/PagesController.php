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

        return view('producto', compact('item_producto'));
    }

    //Productos Detalles
    public function Producto_Detalle($id){
        $producto = App\Producto::find($id);

        return view('producto.producto_detalle', compact('producto'));
    }

    //Productos Agregar
    public function Producto_Agregar(){

        return view('producto.producto_agregar');
    }

    //Productos Crear
    public function Producto_Crear(Request $request){
        //return $request->all();

        $request->validate([
            'codigo_producto' => 'required',
            'imagen_producto' => 'required',
            'nombre_producto' => 'required',
            'empresa_producto' => 'required',
            'ubicacion_producto' => 'required',
            'periocidad_producto' => 'required',
            'tipo_producto' => 'required',
            'celular_producto' => 'required',
            'hora_inicio_producto' => 'required',
            'hora_fin_producto' => 'required',
        ]);

        $nuevo_producto = new App\Producto;
        $nuevo_producto->codigo_producto = $request->codigo_producto;
        $nuevo_producto->imagen_producto = $request->imagen_producto;
        $nuevo_producto->nombre_producto = $request->nombre_producto;
        $nuevo_producto->empresa_producto = $request->empresa_producto;
        $nuevo_producto->ubicacion_producto = $request->ubicacion_producto;
        $nuevo_producto->periocidad_producto = $request->periocidad_producto;
        $nuevo_producto->tipo_producto = $request->tipo_producto;
        $nuevo_producto->celular_producto = $request->celular_producto;
        $nuevo_producto->hora_inicio_producto = $request->hora_inicio_producto;
        $nuevo_producto->hora_fin_producto = $request->hora_fin_producto;

        $nuevo_producto->save();

        return back()->with('mensaje', 'Se agrego correctamente');
    }

    //Clientes
    public function Cliente(){
        return view('cliente');
    }


    //Usuario
    public function Usuario(){
        $nombre = App\Usuario::all();

        return view('usuario', compact('nombre'));
    }

}
