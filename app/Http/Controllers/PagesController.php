<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Inicio(){
        return view('welcome');
    }

    public function Inventario(){
        return view('inventario');
    }

    public function Producto(){
        return view('producto');
    }

    public function Cliente(){
        return view('cliente');
    }

    public function Usuario($tipo_usuario1 = null){
        $tipo_usuario =  ['Gerente General', 'Técnico', 'Secretaria', 'Cliente'];

        //return view('usuario', ['tipo_usuario'=>$tipo_usuario]);
        return view('usuario',compact('tipo_usuario', 'tipo_usuario1'));
    }

}
