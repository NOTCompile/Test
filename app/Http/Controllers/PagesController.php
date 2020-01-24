<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

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

    public function Usuario(){
        $nombre = App\Usuario::all();

        return view('usuario', compact('nombre'));
    }

}
